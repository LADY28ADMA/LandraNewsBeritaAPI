<html lang="en" class="light">
<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
    *{
        font-family: "Montserrat", sans-serif;
    }
</style>
@vite('resources/css/app.css')

<main class="min-h-screen w-full bg-gray-100 text-gray-700" x-data="layout" x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" class="antialiased">
    
    @if(Auth::check())
    <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2 dark:bg-black dark:text-white">
        
        <div class="flex items-center space-x-2">
            <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i class="bx bx-menu"></i></button>
            <img class="w-10 h-10 object-contain" src="http://127.0.0.1:8000/images/ivos.webp" alt="logo">
        </div>
    
        <div>
            <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false"
                class="h-9 w-9 overflow-hidden rounded-full">
                <img src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}" alt="plchldr.co" />
            </button>

            <!-- dropdown profile -->
            <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
                x-show="profileOpen" x-transition>
                <div class="flex items-center space-x-2 p-2">
                    <img src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}" alt="plchldr.co" class="h-9 w-9 rounded-full" />
                    <div class="font-medium">{{ Auth::user()->fullName }}</div>
                </div>

                <div class="flex flex-col space-y-3 p-2">
                    <a href="#" class="transition hover:text-blue-600">My Profile</a>
                    <a href="#" class="transition hover:text-blue-600">Edit Profile</a>
                    <a href="#" class="transition hover:text-blue-600">Settings</a>
                </div>

                <div class="p-2">
                    <button class="flex items-center space-x-2 transition hover:text-blue-600">
                        
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="flex items-center justify-center rounded-md p-1 w-1/4 transition ease-in duration-200 uppercase bg-red-500 hover:bg-gray-800 text-white hover:text-white focus:outline-none">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                                </button>
                            </form>
                        
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="flex w-full h-full">
        <!-- aside -->
        <aside class="flex w-1/4 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2"
            x-show="asideOpen">
            
            <a
              href="{{ url('/dashall') }}"
              class="text-sm flex items-center gap-2 font-medium text-gray-700 py-2 px-2 hover:bg-red-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              <span class="">Dashboard</span>
            </a>
            <a
              href="{{ url('/userall') }}"
              class="text-sm flex items-center gap-2 font-medium text-gray-700 py-2 px-2 hover:bg-red-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
              <span class="">Users</span>
            </a>
            <a
              href="{{ url('/portoall') }}"
              class="text-sm flex items-center gap-2 font-medium text-gray-700 py-2 px-2 hover:bg-red-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-car-garage"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M15 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M5 20h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" /><path d="M3 6l9 -4l9 4" /></svg>
              <span class="">Vehicle</span>
            </a>
            <a
              href="{{ url('/ctgory') }}"
              class="text-sm flex items-center gap-2 font-medium text-gray-700 py-2 px-2 hover:bg-red-500 hover:bg-opacity-85 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
              <span class="">Kategori</span>
            </a>
            <button @click="darkMode=!darkMode" type="button" class="relative inline-flex flex-shrink-0 h-6 mr-5 transition-colors duration-200 ease-in-out border-2 border-transparent rounded-full cursor-pointer bg-zinc-200 dark:bg-zinc-700 w-11 focus:outline-none focus:ring-2 focus:ring-neutral-700 focus:ring-offset-2" role="switch" aria-checked="false">
                <span class="sr-only">Use setting</span>
                <span class="relative inline-block w-5 h-5 transition duration-500 ease-in-out transform translate-x-0 bg-white rounded-full shadow pointer-events-none dark:translate-x-5 ring-0">
                   <span class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-500 ease-in opacity-100 dark:opacity-0 dark:duration-100 dark:ease-out" aria-hidden="true">
                      {{-- 
                      <x-svg class="w-4 h-4 text-neutral-700" svg="sun"/>
                      --}}
                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun w-4 h-4 text-neutral-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                         <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                      </svg>
                   </span>
                   <span class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-100 ease-out opacity-0 dark:opacity-100 dark:duration-200 dark:ease-in" aria-hidden="true">
                      {{-- 
                      <x-svg class="w-4 h-4 text-neutral-700" svg="moon"/>
                      --}}
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon w-4 h-4 text-neutral-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                      </svg>
                   </span>
                </span>
             </button>
             
        </aside>

        <!-- main content page -->
        <div class="w-full grid place-items-center bg-gray-200 p-4">
            @yield('content')
        </div>
    </div>
    @endif  
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    @include('sweetalert::alert')
</main>

<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("layout", () => ({
            profileOpen: false,
            asideOpen: true,
        }));
    });
    document.addEventListener("alpine:init", () => {
        Alpine.data("layout", () => {
            let isMobile = window.innerWidth <= 768; // Menggunakan lebar layar sebagai indikator untuk tampilan mobile
            
            return {
                profileOpen: false,
                asideOpen: !isMobile, // asideOpen akan diatur ke false jika tampilan adalah mobile
            };
        });
    });
    
</script>

<script>
    document.addEventListener("alpine:init", () => {
  Alpine.data("layout", () => ({
    profileOpen: false,
    asideOpen: true,
    darkMode: sessionStorage.getItem('dark-mode') === 'true',
    toggleDarkMode() {
      this.darkMode = !this.darkMode;
      sessionStorage.setItem('dark-mode', this.darkMode ? 'true' : 'false');
      document.documentElement.classList.toggle('dark', this.darkMode);
    }
  }));
});

</script>
</html>


