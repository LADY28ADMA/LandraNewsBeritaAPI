@extends('dashboard.revamp')

@section('content')

<div class="container mx-auto px-4 py-8 overflow-x-auto">
    
    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">List Portofolio</h1>
    </div>
    
        <table class="table-auto max-w-full shadow-lg">
            <thead class="bg-white">
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">No</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">ID_User</th>
                    <th class="sticky left-0 bg-red-50 px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Nama</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Judul</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Kategori</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Link Drive User</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Jenis</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Merek</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Model</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Tahun</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Nopol</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">status</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">link yt</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">thumbnail</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Action</th>
                </tr>
            </thead>
            <tr>
                @foreach($portofolios as $index => $porto)
<form id="editable-formsffff" method="POST" action="{{ route('ptpt.update_porto', ['id_porto' => $porto->id_porto]) }}" enctype="multipart/form-data">
    @csrf
            <tbody class="bg-white">
                
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">{{ $porto->id }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">{{ $porto->id_porto }}</td>
                    <td class="sticky left-0 bg-red-50 px-6 py-4 whitespace-no-wrap border-b border-gray-300">{{ $porto->nama }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        <input
                            type="text"
                            name="deskripsi"
                            value="{{ $porto->deskripsi }}"
                            class="bg-transparent focus:outline-none focus:border-blue-500"
                        />
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        <select name="kategori" id="kategori" class="bg-transparent" required>
                            <option value="250cc" {{ $porto->kategori == '250cc' ? 'selected' : '' }}>250cc</option>
                            <option value="150cc" {{ $porto->kategori == '150cc' ? 'selected' : '' }}>150cc</option>
                            <option value="matic" {{ $porto->kategori == 'matic' ? 'selected' : '' }}>matic</option>
                            <option value="bebek" {{ $porto->kategori == 'bebek' ? 'selected' : '' }}>bebek</option>
                        </select>
                    </td>
                    <td class="px-6 py-4 flex items-center whitespace-no-wrap border-b border-gray-300">
                        <input
                            type="text"
                            name="link_drive"
                            value="{{ $porto->link_drive }}"
                            placeholder="{{ $porto->link_drive ? $porto->link_drive : 'link belum ada' }}"
                            class="bg-transparent focus:outline-1 focus:border-blue-500"
                        />
                        <a href="{{ $porto->link_drive ? $porto->link_drive : '' }}" target="_blank">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-google-drive"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10l-6 10l-3 -5l6 -10z" /><path d="M9 15h12l-3 5h-12" /><path d="M15 15l-6 -10h6l6 10z" /></svg>
                         </a>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        
                        <select name="jenis_kendaraan" id="jenis_kendaraan">
                            <option value="">Pilih</option>
                            <option value="motor" {{ $porto->jenis_kendaraan == 'motor' ? 'selected' : '' }}>Motor</option>
                            <option value="mobil" {{ $porto->jenis_kendaraan == 'mobil' ? 'selected' : '' }}>Mobil</option>
                        </select>
        
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        <input
                            type="text"
                            name="merek_kendaraan"
                            value="{{ $porto->merek_kendaraan }}"
                            class="bg-transparent focus:outline-1 focus:border-blue-500"
                        />
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        <input
                            type="text"
                            name="model_kendaraan"
                            value="{{ $porto->model_kendaraan }}"
                            class="bg-transparent focus:outline-1 focus:border-blue-500"
                        />
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        <input
                            type="number"
                            name="tahun_kendaraan"
                            value="{{ $porto->tahun_kendaraan }}"
                            class="bg-transparent focus:outline-1 focus:border-blue-500"
                        />
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        <input
                            type="text"
                            name="plat_nomor"
                            value="{{ $porto->plat_nomor }}"
                            maxlength="11"
                            class="bg-transparent focus:outline-1 focus:border-blue-500"
                        />
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        
                        <select name="status" id="status">
                            <option value="submitted" {{ $porto->status == 'submitted' ? 'selected' : '' }}>Submitted</option>
                            <option value="ditolak" {{ $porto->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            <option value="diupdate" {{ $porto->status == 'diupdate' ? 'selected' : '' }}>Diperbarui</option>
                            <option value="diterima" {{ $porto->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                        </select>
                    </td>
                    <td class="px-2 py-4 whitespace-no-wrap border-b border-gray-300">
                        
                        
                        <input
                            type="text"
                            name="link_video"
                            value="{{ $porto->link_video }}"
                            placeholder="{{ $porto->link_video ? $porto->link_video :  'link lom ada'}}"
                            class="w-auto bg-transparent focus:outline-1 focus:border-blue-500"
                        />
                        
                    </td>
                    <td class="px-2 py-4 border-b">
                        <a href="{{ $porto->link_video ? $porto->link_video : '' }}" target="_blank">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" /><path d="M10 9l5 3l-5 3z" /></svg>
                         </a>
                    </td>
                    <td class="flex px-1 gap-1 items-center justify-center py-6 whitespace-no-wrap border-b border-gray-300">
                        <img class="w-7 h-7 object-cover" src="{{ $porto->thumbnail ? $porto->thumbnail :  asset('images/thumdum.jpg')}}" alt="thumbnail contestant ivos">
                        <input
                            type="file"
                            name="thumbnail"
                            class="bg-transparent focus:outline-1 focus:border-blue-500"
                        />
                    </td>
                    
                <td><button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button></td>
                </tr>
            </form>
            @endforeach
            </tbody>
        </table>

</div>
<script src="{{ asset('js/limit.js') }}"></script>
<script src="{{ asset('js/tultip.js') }}"></script>
@endsection
