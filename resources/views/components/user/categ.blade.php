@extends('dashboard.usr')
@section('kategori')
@if(Auth::check())
<!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 float-right"><a href="{{ url('/portouser') }}">lihat porto</a></button> -->
<h2 class="mb-2 mt-8">Registrasi Kendaraan</h2>
<form method="POST" action="{{ route('ptpt.create_porto', ['id' => Auth::id()]) }}">
    @csrf 
    
    <!-- <h1 class="text-xl font-semibold mb-4">{{ Auth::user()->id }}</h1> -->
    <div class="mb-4">
        <label for="deskripsi" class="block mb-1">Nama:</label>
        <input type="text" id="deskripsi" name="deskripsi" required placeholder="Supra Trondol Max" class="rounded-lg lg:w-3/4 max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
        
    </div>
     
    <div class="grid grid-cols-2 lg:w-3/4 gap-2">
        <div class="mb-4">
            <label for="jenis_kendaraan" class="block mb-1">Jenis Kendaraan:</label>
            <select name="jenis_kendaraan" id="jenis_kendaraan" required class="rounded-lg w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                <option value="">Pilih</option>
                <option value="motor">Motor</option>
                <option value="mobil">Mobil</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label for="kategori" class="block mb-1">Kategori:</label>
            <select id="kategori" name="kategori" required class="rounded-lg w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach ($categories as $categorye)
                <option value="{{ $categorye->category }}">{{ $categorye->category }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="grid grid-cols-2 lg:w-3/4 max-sm:w-full gap-2">
        <div class="mb-4">
            <label for="merek_kendaraan" class="block mb-1">Merek Kendaraan:</label>
            <input type="text" id="merek_kendaraan" name="merek_kendaraan" required placeholder="yamaha/honda/.." class="rounded-lg w-full max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
        </div>
    
        <div class="mb-4">
            <label for="model_kendaraan" class="block mb-1">Model Kendaraan:</label>
            <input type="text" id="model_kendaraan" name="model_kendaraan" required class="rounded-lg w-full max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
        </div>
    </div>

    <div class="grid grid-cols-2 lg:w-3/4 max-sm:w-full gap-2">
    <div class="mb-4">
        <label for="tahun_kendaraan" class="block mb-1">Tahun:</label>
        <select id="tahun_kendaraan" name="tahun_kendaraan" required class="rounded-lg w-full max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
            <option value="">Pilih Tahun</option>
            <!-- Menambahkan opsi tahun dari 1970 hingga 2050 -->
            <?php
            for ($tahun = date("Y"); $tahun >= 1970; $tahun--) {
                echo "<option value=\"$tahun\" class=\"bg-white dark:bg-gray-800\">$tahun</option>";
            }
            ?>
        </select>
    </div>
    
    <div class="mb-4">
        <label for="plat_nomor" class="block mb-1">Nopol:</label>
        <input type="text" id="plat_nomor" maxlength="11" name="plat_nomor" required placeholder="A 1234 XX" class="uppercase rounded-lg w-full max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
    </div>
    </div>

    <div class="mb-4">
        <label for="link_drive" class="block mb-1">Foto/Video (link Gdrive) :</label>
        <input type="text" id="link_drive" name="link_drive" required placeholder="https://drive.google.com/shre/abcde" class="rounded-lg lg:w-3/4 max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
    </div>
    <!-- <div class="mb-4">
        <label for="kategori" class="block mb-1">Kategori:</label>
        <input type="text" id="kategori" name="kategori" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div> -->
        
    <button type="submit" class="lg:w-3/4 max-sm:w-full bg-red-300 hover:bg-red-500 text-white px-4 py-2 rounded-md focus:outline-none focus:bg-red-700">Submit</button>
    <script>
        document.getElementById('docpaste').addEventListener('click', function() {
            navigator.clipboard.readText()
                .then(text => {
                    document.getElementById('link_drive').value = text;
                })
                .catch(err => {
                    console.error('Gagal membaca isi clipboard: ', err);
                });
        });
    </script>
</form>

@include('components.modal.chprof')
<script src="{{ asset('js/limit.js') }}"></script>
@include('sweetalert::alert')
@endif

@endsection