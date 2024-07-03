<?php

namespace App\Http\Controllers;

use App\Models\user_profile;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserProfileController extends Controller
{
    public function update_profile(Request $request, $id)
    {
        try {
            $updateAbout = user_profile::find($id);

            $credentials = $request->validate([
                'writer' => 'required|max:50|unique:user_profiles',
                'email' => 'email:dns|required|unique:user_profiles',
            ]);

            

            // $request->password == null ? $request->password : $credentials['password'] = Hash::make($request->password);
            // if (!empty($request->password)) {
            //     $credentials['password'] = Hash::make($request->password);
            // } else {
            //     unset($credentials['password']);
            // }
            

            $updateAbout->update($credentials);
            $response = [
                "status" => "success",
                "name" => $updateAbout->writer
            ];
            return response()->json($response,200);


        } catch (ValidationException $err) {
            $errors = $err->errors();
            $response = [
                'message' => 'Failed',
                'error' => $errors
            ];
            return response()->json($response,201);
        }
    }

    public function show_statProfile()
    {
        // $getContent = user_profile::all();

        $totalUsers = user_profile::count();
        $statusUsers = user_profile::whereIn('status', ['register', 'verifikasi'])->count();

        $statusUsersVer = user_profile::where('status', 'verifikasi')->count();

        $recentUsers = user_profile::orderBy('created_at', 'desc')
            ->take(3)
            ->get(['id', 'profilePhoto', 'username', 'fullName', 'email']);

        return view('admin.dashall', compact('recentUsers', 'totalUsers', 'statusUsers', 'statusUsersVer'));
    }

    public function show_profile(Request $request)
    {
        $query = $request->input('query');

        $totalUsers = user_profile::count();
        $statusUsers = user_profile::where('status', 'register')->count();

        $userProfiles = user_profile::query();

        if ($query) {
            $userProfiles->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('username', 'like', "%$query%")
                    ->orWhere('email', 'like', "%$query%")
                    ->orWhere('fullName', 'like', "%$query%");
            });
            toast('ditemukan', 'info');
            // return back();
        }


        $userProfiles->orderByRaw("CASE WHEN role = 'admin' THEN 1 ELSE 2 END")
            ->orderBy('id', 'asc');

        $userProfiles = $userProfiles->paginate(5);

        if ($userProfiles->isEmpty()) {
            toast('kosong', 'info');

            return back();
        }

        return view('admin.usac', compact('userProfiles', 'totalUsers', 'statusUsers'));
    }



    public function get_user()
    {
        $getContent = user_profile::select('id','writer', 'email', 'status')->get();
        return response()->json($getContent);
    }

    public function create_user(Request $request)
    {
        try {
            $credentials = $request->validate([
                'writer' => 'required|max:50|unique:user_profiles',
                'email' => 'email:dns|required|unique:user_profiles',
                'password' => 'required|min:8'
            ]);

            $credentials['password'] = Hash::make($request->password);
            $user = user_profile::create($credentials);
            $user->status = 'aktif';
            $user->save();
            $response = [
                "status" => "berhasil",
                "user" => $user->writer,
            ];

            return response()->json(['message' => 'Pendaftaran Writer Berhasil', 'user' => $response], 201);

        } catch (ValidationException $err) {
            $errors = $err->errors();
            $response = [
                'message' => 'Register error',
                'error' => $errors
            ];
            return response()->json($response, 422);
        }
    }

    public function login(Request $request)
    {
        try {
            Hash::make($request->password);
            $cridentials = $request->validate([
                'writer' => 'required',
                'password' => 'required'
            ]);

            if (auth()->attempt($cridentials)) {
                $request->session()->regenerate();
                $response = [
                    "status" => "berhasil login",
                ];
                return response()->json($response);
            } else {
                $response = [
                    'message' => 'Login error',
                ];
                return response()->json($response, 422);
            }
        } catch (ValidationException $err) {
            $errors = $err->errors();
            $response = [
                'message' => 'Login errorrr',
                'error' => $errors
            ];
            return response()->json($response, 422);
            // return response()->json($response, 422);
        }
    }



    public function logout(Request $request)
    {

        auth()->logout();
        $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return response()->json("logout succes",200);
    }


    public function reset_password(Request $request)
    {
        $cridentials = $request->validate([
            'email' => 'email:dns|required',
        ]);

        $user = user_profile::where('email', $cridentials)->first();

        if (!$user) {
            alert()->warning('WarningAlert', 'Pengguna tidak ditemukan')->autoClose(5000);
            return back();
        }

        $sandi = Str::random(8);

        $user->password = Hash::make($sandi);
        $user->save();

        alert()->success('Password Reset', 'Password baru Anda: ' . $sandi)->autoClose(25000);


        return redirect()->route('login');
    }

}
