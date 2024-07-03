
<!-- Modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 flex justify-center items-center h-full w-full z-50" style="background: transparent; backdrop-filter: blur(2px);">
    <div class="relative p-4 w-full max-w-2xl">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Persetujuan Pengisian Data Diri
                </p>
                <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                    Dengan ini, saya dengan sukarela memberikan persetujuan atas penggunaan data diri saya dalam formulir pendaftaran untuk kontes otomotif online ini. Saya memahami bahwa informasi yang saya berikan akan digunakan untuk keperluan administrasi event.
                </p>
                <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                    Saya menyadari bahwa panitia memiliki hak untuk memverifikasi kebenaran informasi yang saya berikan. Jika ditemukan informasi yang tidak akurat atau adanya tindakan kecurangan, saya bersedia menerima konsekuensi yang berlaku, termasuk kemungkinan diskualifikasi dari event.
                </p>
                <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                    Saya juga menyatakan bahwa kendaraan yang saya daftarkan adalah milik saya sendiri atau saya memiliki izin yang sah untuk mendaftarkan kendaraan tersebut dalam event ini. Saya bertanggung jawab sepenuhnya atas keadaan dan keamanan kendaraan selama event berlangsung.
                </p>
                <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                    Dengan membaca persetujuan ini, saya menyatakan bahwa saya telah membaca dan memahami semua informasi dan persyaratan yang terkait dengan event ini.
                </p>

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-red-400 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800">Saya Setuju</button>
                <!-- <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    
    document.getElementById('open-modal').addEventListener('click', function() {
        document.getElementById('default-modal').classList.remove('hidden');
        document.getElementById('default-modal').setAttribute('aria-hidden', 'false');
    });

    
    document.querySelectorAll('[data-modal-hide="default-modal"]').forEach(function(button) {
        button.addEventListener('click', function() {
            document.getElementById('default-modal').classList.add('hidden');
            document.getElementById('default-modal').setAttribute('aria-hidden', 'true');
        });
    });
</script>


