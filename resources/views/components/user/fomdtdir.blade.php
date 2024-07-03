@if(Auth::check())
<ol class="flex max-sm:flex-col items-center w-full p-3 gap-5 justify-evenly space-x-2 text-sm font-medium text-center border-2 border-gray-300 rounded-lg my-auto dark:text-gray-400 sm:text-base sm:p-4 sm:space-x-4 rtl:space-x-reverse placeholder-gray-400" id="progress-bar">
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-500">
            1
        </span>
        Registrasi
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            2
        </span>
        Verifikasi
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            3
        </span>
        Contest Start
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            4
        </span>
        Done
    </li>
</ol>
@include('components.modal.chprof')
@endif

<script>
    const progressBar = document.getElementById('progress-bar');
    const status = '{{ Auth::check() ? Auth::user()->status : null }}';

    if (status === 'register') {
        progressBar.children[0].classList.add('text-green-600', 'dark:text-green-500');
    } else if (status === 'verifikasi') {
        progressBar.children[1].classList.add('text-red-600', 'dark:text-red-500');
    } else if (status === 'start') {
        progressBar.children[2].classList.add('text-yellow-400', 'dark:text-yellow-300');
    } else if (status === 'done') {
        progressBar.children[3].classList.add('text-yellow-400', 'dark:text-yellow-300');
    } else {
        for (let i = 0; i < progressBar.children.length; i++) {
            progressBar.children[i].classList.add('text-gray-500', 'dark:text-gray-400');
        }
    }
</script>
