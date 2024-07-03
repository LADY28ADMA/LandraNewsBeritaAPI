<header class="absolute inset-x-0 top-0 z-50">
    <nav
        class="flex items-center justify-between p-6 lg:px-8"
        aria-label="Global"
    >
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">IVOS</span>
                <img
                    src="{{ asset('images/ivos.webp') }}"
                    alt="ivos logo"
                    class="w-24 rounded-lg shadow-md hover:opacity-75 object-contain"
                />
            </a>
            
        </div>
        
        
        <div class="lg:flex lg:flex-1 lg:justify-end gap-2">
            <div class="lg:flex lg:flex-1 lg:justify-end gap-2">
                @if(Auth::check())
                    <!-- Jika sudah login -->
                    <div class="flex items-center gap-2">
                        <div class="w-12 h-12 rounded-full bg-gray-300">
                            <a href="/dashboard" class="relative block">
                                <img
                                    alt="profil"
                                    src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}" 
                                    class="mx-auto object-cover rounded-full aspect-square shadow-md"
                                />
                            </a>
                        </div>
                        
                    </div>
                    
                @else
                    <!-- Jika belum login -->
                    <a href="{{ url('/registrasi') }}"><button class="bn632-hover bn27">Join</button></a>
                    <link rel="stylesheet" href="{{ asset('css/homee.css') }}">
                @endif
            </div>
        
    </nav>
  
    
</header>