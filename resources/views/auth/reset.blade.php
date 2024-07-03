@vite('resources/css/app.css')
<body class="antialiased w-full h-dvh grid place-items-center" style="background-color: #f5f5f5;">
    <div class="w-1/2 bg-white p-8 rounded-xl shadow shadow-slate-300 max-sm:w-3/4">
        <h1 class="text-4xl font-medium">Reset password</h1>
        <p class="text-slate-500">Fill up the form to reset the password</p>

            <form class="my-10" action="{{ route('acac.reset_password') }}" method="post">
                @csrf
                @method('POST')
            <div class="flex flex-col space-y-5">
                <label for="email">
                    <p class="font-medium text-slate-700 pb-2">Email<span class="text-red-500">*</span></p>
                    <input id="email" name="email" type="email" required class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="example@gmail.com">
                </label>
               
                <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                      </svg>
                      
                      <span>Reset password</span>
                </button>
                
                <p class="text-center mt-2">Not registered yet? <a href="{{ url('/login') }}" class="text-indigo-600 font-medium inline-flex space-x-1 items-center"><span>Register now </span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                  </svg></span></a></p>
            </div>
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 bottom-0 left-0 z-50 flex justify-center items-center w-full h-full md:inset-0 bg-black bg-opacity-50" style="animation: fadein ease-in-out 100s;">


                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">password hanya muncul satu kali, harap simpan baik-baik</h3>
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya,Lanjutkan
                            </button>
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
    

    
    
    @include('sweetalert::alert')
    <script>
        // Ambil semua elemen dengan atribut data-modal-target
        const modalToggles = document.querySelectorAll('[data-modal-target]');
        // Ambil semua elemen dengan atribut data-modal-hide
        const modalCloses = document.querySelectorAll('[data-modal-hide]');
        
        // Tambahkan event listener ke setiap elemen modal-toggle
        modalToggles.forEach(modalToggle => {
          modalToggle.addEventListener('click', () => {
            const modalId = modalToggle.dataset.modalTarget;
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
          });
        });
        
        // Tambahkan event listener ke setiap elemen modal-close
        modalCloses.forEach(modalClose => {
          modalClose.addEventListener('click', () => {
            const modalId = modalClose.dataset.modalHide;
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
          });
        });
        </script>
</body>