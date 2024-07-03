<?php

namespace App\Http\Controllers;

use App\Models\newsfeeds;
use App\Models\portofolio;
use App\Models\user_profile;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NewsFeedsController extends Controller
{

    public function create_news(Request $request, $id)
    {
        try {
            $userProfile = user_profile::find($id);

            if ($userProfile) {

                // $existingPortofolio = newsfeeds::where('nama_writer', $userProfile->id)->first();
                $data = $request->validate([
                    'judul' => 'required',
                    'tag' => 'required',
                    'media' => 'nullable',
                    'isi' => 'required',
                    'kategori' => 'required',
                    'status' => 'required'
                ]);

                $data['id_writer'] = $userProfile->id;
                $data['nama_writer'] = $userProfile->writer;
                // $data['status'] = 'aktif';

                if ($request->media != null) {
                    $thumbnailJ = $request->file('media');

                    $strToArr = str_split($request->media);
                    $gambar = implode('', array_slice($strToArr, 16));
                    if (File::exists(public_path('storage/images/' . $gambar))) {
                        File::delete(public_path('storage/images/' . $gambar));
                    }
                    $thumbName = time() . 'media' . '.' . $thumbnailJ->getClientOriginalExtension();
                    $thumbnailJ->move(public_path('storage/images'), $thumbName);
                    $thumbFile = Storage::url('images/' . $thumbName);
                    $data['media'] = $thumbFile;
                }


                newsfeeds::create($data);

                $response = [
                    "status" => "berita berhasil terbit",
                ];

                return response()->json($response);

            } else {
                alert()->error('error 404', 'gagal menambahkan');
                return back();
            }
        } catch (ValidationException $err) {
            $errors = $err->errors();
            $response = [
                'message' => 'Failed',
                'error' => $errors
            ];
            Alert::toast('Failed to add porto', 'error');

            return back()->withErrors($errors)->withInput();
        }
    }

    public function update_news(Request $request, $id)
    {
        try {
            $updatePorto = newsfeeds::find($id);
            $data = $request->validate([
                'judul' => 'required',
                'tag' => 'required',
                'media' => 'nullable',
                'isi' => 'required',
                'kategori' => 'required',
                'status' => 'required'
            ]);

            if ($request->media != null) {
                $thumbnailJ = $request->file('media');

                $strToArr = str_split($request->media);
                $gambar = implode('', array_slice($strToArr, 16));
                if (File::exists(public_path('storage/images/' . $gambar))) {
                    File::delete(public_path('storage/images/' . $gambar));
                }
                $thumbName = time() . 'media' . '.' . $thumbnailJ->getClientOriginalExtension();
                $thumbnailJ->move(public_path('storage/images'), $thumbName);
                $thumbFile = Storage::url('images/' . $thumbName);
                $data['media'] = $thumbFile;
            }

            // Auth::user();

            $updatePorto->update($data);

            return response()->json('data berhasil diperbarui', 200);

        } catch (ValidationException $err) {
            $response = [
                'message' => 'Upload error',
                'response' => $err->response
            ];
            return response()->json($response,201);
        }
    }


    public function delete_news($id)
    {
        $news = newsfeeds::find($id);
        if (!$news) {
            return response()->json(['error' => 'News not found'], 404);
        }
        $news->delete();
        return response()->json(['message' => 'News deleted successfully']);
    }

    public function get_all_news()
    {
        $news = newsfeeds::all();
        return response()->json($news);
    }
    // public function all_news()
    // {
    //     $news = newsfeeds::where('status', 'aktif')->get();
    //     return response()->json($news);
    // }
    public function all_news()
    {
        $news = newsfeeds::where('status', 'aktif')
            ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan tanggal dibuat (terbaru ke terlama)
            ->get();
    
        return response()->json($news);
    }
    
    public function getLifestyleNews()
    {
        $lifestyleNews = newsfeeds::where('kategori', 'lifestyle')->get();
        return response()->json($lifestyleNews);
    }
    
    public function getNonLifestyleNews()
    {
        $nonLifestyleNews = newsfeeds::where('kategori', '<>', 'lifestyle')->get();
        return response()->json($nonLifestyleNews);
    }


    public function search_news(Request $request)
    {
        $query = $request->input('query');

        $news = newsfeeds::query();

        if ($query) {
            $news->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('judul', 'like', "%$query%")
                    ->orWhere('kategori', 'like', "%$query%")
                    ->orWhere('tag', 'like', "%$query%");
            });
        }

        $news = $news->get();

        return response()->json($news);
    }
}
