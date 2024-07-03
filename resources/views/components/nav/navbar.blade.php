<header class="w-full z-50">
    <nav
        class="flex items-center justify-between p-6 lg:px-8"
        aria-label="Global"
    >
        <div class="flex lg:flex-1">
            <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">IVOS</span>
                <img
                    src="{{ asset('images/ivos.webp') }}"
                    alt="ivos logo"
                    class="w-24 rounded-lg shadow-md hover:opacity-75 object-contain"
                />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button
                type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
                </svg>
            </button>
        </div>
        
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-2 items-center">
            @if(Auth::check())
                <!-- Jika sudah login -->
                <a href="{{ url('/feed') }}">explore</a>
                <div class="flex items-center gap-2">
                    <div class="w-12 h-12 rounded-full bg-gray-300">
                        <a href="#" class="relative block">
                            <img
                                alt="profil"
                                src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}" 
                                class="mx-auto object-cover rounded-full aspect-square"
                            />
                        </a>
                    </div>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="flex items-center p-3 transition ease-in duration-200 uppercase rounded-full bg-red-500 hover:bg-gray-800 text-white hover:text-white focus:outline-none">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                        </button>
                    </form>
                </div>
                
            @else
                <!-- Jika belum login -->
                <button class="flex items-center px-4 py-2 transition ease-in duration-200 uppercase rounded-full bg-red-500 hover:bg-gray-800 text-white hover:text-white focus:outline-none">
                    <a href="{{ url('/registrasi') }}" class="btn btn-primary">Get Start</a>
                    <span aria-hidden="true">&rarr;</span>
                </button>
            @endif
        </div>
        
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    
</header>