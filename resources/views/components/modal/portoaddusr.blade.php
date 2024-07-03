<div
    id="portouser-modal"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 flex justify-center items-center h-full w-full z-50"
    style="background: transparent; backdrop-filter: blur(1px)"
>
    <div class="relative p-4 bg-white rounded-lg w-full max-w-md shadow-md">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 border-b">
            <h3 class="text-lg font-semibold text-gray-900">New</h3>
            <button
                type="button"
                class="text-gray-400 hover:text-gray-600 focus:outline-none"
                data-modal-hide="portouser-modal"
            >
                <svg
                    class="w-6 h-6"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    ></path>
                </svg>
            </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 space-y-4">
            @if(Auth::check())
            <form
                method="POST"
                action="{{ route('ptpt.create_porto', ['id' => Auth::id()]) }}"
                class="max-w-md mx-auto"
            >
                @csrf
                <h1 class="text-xl font-semibold mb-4">
                    {{ Auth::user()->id }}
                </h1>
                <div class="mb-4">
                    <label for="link_drive" class="block mb-1"
                        >Link Google Drive:</label
                    >
                    <input
                        type="text"
                        id="link_drive"
                        name="link_drive"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    />
                </div>

                <div class="mb-4">
                    <label for="jenis_kendaraan" class="block mb-1"
                        >Jenis Kendaraan:</label
                    >
                    <input
                        type="text"
                        id="jenis_kendaraan"
                        name="jenis_kendaraan"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    />
                </div>

                <div class="mb-4">
                    <label for="merek_kendaraan" class="block mb-1"
                        >Merek Kendaraan:</label
                    >
                    <input
                        type="text"
                        id="merek_kendaraan"
                        name="merek_kendaraan"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    />
                </div>

                <div class="mb-4">
                    <label for="model_kendaraan" class="block mb-1"
                        >Model Kendaraan:</label
                    >
                    <input
                        type="text"
                        id="model_kendaraan"
                        name="model_kendaraan"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    />
                </div>

                <div class="mb-4">
                    <label for="tahun_kendaraan" class="block mb-1"
                        >Tahun Kendaraan:</label
                    >
                    <input
                        type="number"
                        id="tahun_kendaraan"
                        name="tahun_kendaraan"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    />
                </div>

                <div class="mb-4">
                    <label for="plat_nomor" class="block mb-1"
                        >Plat Nomor:</label
                    >
                    <input
                        type="text"
                        id="plat_nomor"
                        maxlength="11"
                        name="plat_nomor"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    />
                </div>

                <!-- <div class="mb-4">
        <label for="kategori" class="block mb-1">Kategori:</label>
        <input type="text" id="kategori" name="kategori" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div> -->

                <div class="mb-4">
                    <label for="kategori" class="block mb-1">Kategori:</label>
                    
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block mb-1">Deskripsi:</label>
                    <textarea
                        id="deskripsi"
                        name="deskripsi"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                >
                    Submit
                </button>
            </form>
            @else
            <p class="text-gray-500">login dulu.</p>
            @endif
        </div>
        <!-- Modal footer -->
        <div class="flex items-center justify-end p-4 border-t">
            @if(Auth::check())
            <button
                type="submit"
                form="editable-form3"
                class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none"
            >
                Upload
            </button>
            @else
            <a
                href="#"
                class="px-4 py-2 text-white bg-gray-500 rounded-lg hover:bg-gray-600 focus:outline-none"
                >Login</a
            >
            @endif
        </div>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById("portouser-modal").classList.add("hidden");
    }

    document
        .getElementById("open-portouser-modal")
        .addEventListener("click", function () {
            document
                .getElementById("portouser-modal")
                .classList.remove("hidden");
        });

    document
        .querySelector('[data-modal-hide="portouser-modal"]')
        .addEventListener("click", function () {
            closeModal();
        });
</script>
