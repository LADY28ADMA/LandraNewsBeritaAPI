@if(Auth::check())
<button class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 float-right"><a href="{{ url('/portouser') }}">lihat porto</a></button>
<form method="POST" action="{{ route('ptpt.create_porto', ['id' => Auth::id()]) }}" class="max-w-md mx-auto">
    @csrf 
    <h1 class="text-xl font-semibold mb-4">{{ Auth::user()->id }}</h1>
    <div class="mb-4">
        <label for="link_drive" class="block mb-1">Link Google Drive:</label>
        <input type="text" id="link_drive" name="link_drive" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>
    
    <div class="mb-4">
        <label for="jenis_kendaraan" class="block mb-1">Jenis Kendaraan:</label>
        <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="merek_kendaraan" class="block mb-1">Merek Kendaraan:</label>
        <input type="text" id="merek_kendaraan" name="merek_kendaraan" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="model_kendaraan" class="block mb-1">Model Kendaraan:</label>
        <input type="text" id="model_kendaraan" name="model_kendaraan" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="tahun_kendaraan" class="block mb-1">Tahun:</label>
        <input type="number" id="tahun_kendaraan" name="tahun_kendaraan" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="plat_nomor" class="block mb-1">Plat Nomor:</label>
        <input type="text" id="plat_nomor" name="plat_nomor" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <!-- <div class="mb-4">
        <label for="kategori" class="block mb-1">Kategori:</label>
        <input type="text" id="kategori" name="kategori" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div> -->
        
    
    

    <div class="mb-4">
        <label for="deskripsi" class="block mb-1">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
</form>
@endif
