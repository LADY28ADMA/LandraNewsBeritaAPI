<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/ivos.webp') }}" type="image/x-icon">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    @if(Auth::check())
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="flex items-center justify-center mt-12 mb-8">
                <img src="{{ Auth::user()->profilePhoto ? Auth::user()->profilePhoto : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}" alt="Admin Profile Picture" class="w-24 h-24 rounded-full">
            </div>
            <nav class="flex-grow">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/dashall') }}" class="block text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-4" data-content="dashboard">
                            <i class='bx bxs-dashboard'></i>
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/userall') }}" class="block text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-4" data-content="users">
                            <i class='bx bxs-user'></i>
                            <span class="ml-2">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/portoall') }}" class="block text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-4" data-content="portfolio">
                            <i class='bx bxs-folder-open'></i>
                            <span class="ml-2">Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/ctgory') }}" class="block text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-4" data-content="category">
                            <i class='bx bxs-cog'></i>
                            <span class="ml-2">Kategori</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="w-full">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="flex items-center p-3 transition ease-in duration-200 uppercase rounded-full bg-red-500 hover:bg-gray-800 text-white hover:text-white focus:outline-none">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                    </button>
                </form>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 bg-white p-8" id="main-content">
            @yield('content')
        </main>
    </div>
    @include('sweetalert::alert')
    @endif  
</body>
</html>
