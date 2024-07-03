@extends('dashboard.usr') @section('isinyapo')
<h2 class="mb-2">Data Kendaraan</h2>
@include('components.modal.portoaddusr') 

@if($portofolios->isEmpty())
<div class="outrportoemp lg:w-3/4 max-sm:w-full h-52 bg-gray-300 bg-opacity-35 grid place-items-center">

    <p class="font-semibold text-gray-600">
        Belum ada data
        
    </p>
    
</div>
@else
<div class="overflow-x-auto">
    @if(Auth::check())
    @foreach ($portofolios as $porto)
    <form
        id="editable-formsffff"
        action="{{ route('ptpt.update_porto', ['id_porto' => $porto->id_porto]) }}"
        method="POST"
    >
    @csrf @method('POST')
        @php
            $statusColor = $porto->status == 'ditolak' ? 'border-red-500 bg-red-300' : 'border-gray-300';
        @endphp
        <table
            class="table-auto w-3/4 border-collapse border-2 {{ $statusColor }} rounded-xl shadow-md"
        >
            <tbody class="rounded-md">
                
                <tr class="{{ $statusColor }}">
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        ID
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 bg-gray-100 hover:bg-gray-200"
                    >
                        {{ $porto->id_porto }}
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Status
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 hover:bg-gray-200 cursor-not-allowed"
                    >
                    <span
                    class="relative inline-block px-3 py-1 font-semibold leading-tight @if($porto->status == 'diterima') text-green-900 @else text-pink-900 @endif">
                    <span aria-hidden
                        class="absolute inset-0 opacity-50 rounded-full @if($porto->status == 'diterima') bg-green-200 @else bg-pink-200 @endif"></span>
                <span class="relative">{{ $porto->status }}</span>
                </span>
                    </td>
                </tr>
                
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Judul
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 hover:bg-gray-200"
                    >
                        <input
                            type="text"
                            name="deskripsi"
                            value="{{ ucwords(strtolower($porto->deskripsi)) }}"
                            class="bg-transparent focus:outline-none focus:border-blue-500"
                        />
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Link Drive
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 bg-gray-100 hover:bg-gray-200"
                    >
                    <div class="relative flex items-center gap-2 bg-transparent">
                        <input
                            type="text"
                            id="Drive"
                            name="link_drive"
                            class="w-auto bg-transparent border-gray-300 rounded-sm py-2 pr-10"
                            placeholder="Paste here..."
                            value="{{ $porto->link_drive }}"
                        />
                        <a href="{{ $porto->link_drive }}" target="_blank">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler text-gray-500 hover:text-black icons-tabler-outline icon-tabler-brand-google-drive"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10l-6 10l-3 -5l6 -10z" /><path d="M9 15h12l-3 5h-12" /><path d="M15 15l-6 -10h6l6 10z" /></svg>
                    </a>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Jenis
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 bg-gray-100 hover:bg-gray-200"
                    >
                    <select name="jenis_kendaraan" id="jenis_kendaraan" class="bg-transparent" required>
                        <option value="">Pilih</option>
                        <option value="motor" {{ $porto->jenis_kendaraan == 'motor' ? 'selected' : '' }}>Motor</option>
                        <option value="mobil" {{ $porto->jenis_kendaraan == 'mobil' ? 'selected' : '' }}>Mobil</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Kategori
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 hover:bg-gray-200"
                    >
                    <select name="kategori" id="kategori" class="bg-transparent" required>
                        <option value="250cc" {{ $porto->kategori == '250cc' ? 'selected' : '' }}>250cc</option>
                        <option value="150cc" {{ $porto->kategori == '150cc' ? 'selected' : '' }}>150cc</option>
                        <option value="matic" {{ $porto->kategori == 'matic' ? 'selected' : '' }}>matic</option>
                        <option value="bebek" {{ $porto->kategori == 'bebek' ? 'selected' : '' }}>bebek</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Merek
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 bg-gray-100 hover:bg-gray-200"
                    >
                    <input
                    type="text"
                    name="merek_kendaraan"
                    value="{{ $porto->merek_kendaraan}}"
                    class="bg-transparent focus:outline-none focus:border-blue-500"
                />
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Model
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 hover:bg-gray-200"
                    >
                    <input
                    type="text"
                    name="model_kendaraan"
                    value="{{ $porto->model_kendaraan }}"
                    class="bg-transparent focus:outline-none focus:border-blue-500"
                />
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Tahun
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 bg-gray-100 hover:bg-gray-200"
                    >
                    <input
                    type="number"
                    name="tahun_kendaraan"
                    value="{{ $porto->tahun_kendaraan }}"
                    class="bg-transparent focus:outline-none focus:border-blue-500"
                />
                    </td>
                </tr>
                <tr>
                    <td
                        class="border border-gray-300 px-4 py-2 font-medium bg-gray-200"
                    >
                        Nopol
                    </td>
                    <td
                        class="border border-gray-300 px-4 py-2 hover:bg-gray-200"
                    >
                    <input
                    type="text"
                    name="plat_nomor"
                    value="{{ $porto->plat_nomor }}"
                    maxlength="11"
                    class="bg-transparent focus:outline-none focus:border-blue-500"
                />
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai dengan data yang ingin ditampilkan -->
            </tbody>
        </table>
        <button type="submit"
        id="submit-btn" class="bg-red-300 hover:bg-red-500 mt-4 text-white font-semibold my-2 p-2 lg:w-3/4 max-sm:w-full rounded-md">
        Update
    </button>
</form>
<script src="{{ asset('js/limit.js') }}"></script>
@endforeach
    @endif
</div>
@include('sweetalert::alert')
@endif @endsection
