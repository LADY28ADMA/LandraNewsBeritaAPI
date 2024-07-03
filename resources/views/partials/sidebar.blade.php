<aside id="sidebar" class="w-64 bg-gray-800 text-white flex flex-col">
    <div class="flex items-center justify-center mt-12 mb-8">
        <img src="path/to/admin/profile/picture" alt="Admin Profile Picture" class="w-24 h-24 rounded-full">
    </div>
    <nav class="flex-grow">
        <ul class="space-y-2">
            <li class="text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-2">
                <a href="{{ url('/registrasi') }}" class="flex items-center justify-start">
                    <i class='bx bxs-dashboard'></i>
                    <span class="ml-2">Dashboard</span>
                </a>
            </li>
            <li class="text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-2">
                <a href="{{ url('/registrasi') }}" class="flex items-center justify-start">
                    <i class='bx bxs-user'></i>
                    <span class="ml-2">Users</span>
                </a>
            </li>
            <li class="text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-2">
                <a href="{{ url('/registrasi') }}" class="flex items-center justify-start">
                    <i class='bx bxs-folder-open'></i>
                    <span class="ml-2">Portfolio</span>
                </a>
            </li>
            <li class="text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg p-2">
                <a href="#" class="flex items-center justify-start">
                    <i class='bx bxs-cog'></i>
                    <span class="ml-2">Kategori</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="p-4">
        <a href="#" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded-lg block">
            <i class='bx bxs-log-out-circle'></i>
            <span class="ml-2">Logout</span>
        </a>
    </div>
</aside>
