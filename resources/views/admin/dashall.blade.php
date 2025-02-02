@extends('dashboard.revamp')

@section('content')    

    <div class="container">
        <h1 class="text-2xl font-bold mb-1">User Statistics</h1>
        <div class="innerstatuser flex mx-2 gap-4 justify-center">
              
        <div class="p-8 bg-white shadow-lg rounded-2xl dark:bg-gray-800 w-1/4">
            <div class="flex items-center">
                <span class="relative p-4 bg-purple-200 rounded-xl">
                    <svg width="40" fill="currentColor" height="40" class="absolute h-4 text-purple-500 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-black text-md dark:text-white">
                    Total Users
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="my-4 text-5xl font-bold text-left text-gray-700 dark:text-gray-100">
                    {{ $totalUsers }}
                    <span class="text-sm">
                        $
                    </span>
                </p>
                <div class="flex items-center text-sm text-green-500">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                    <span>
                        5.5%
                    </span>
                    <span class="text-gray-400">
                         vs last month
                    </span>
                </div>
            </div>
        </div>
        <div class="p-8 bg-white shadow-lg rounded-2xl dark:bg-gray-800 w-1/4">
            <div class="flex items-center">
                <span class="relative p-4 bg-purple-200 rounded-xl">
                    <svg width="40" fill="currentColor" height="40" class="absolute h-4 text-purple-500 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-black text-md dark:text-white">
                  User Terdaftar
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="my-4 text-5xl font-bold text-left text-gray-700 dark:text-gray-100">
                    {{ $statusUsers }}
                    <span class="text-sm">
                        $
                    </span>
                </p>
                <div class="flex items-center text-sm text-green-500">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                    <span>
                        5.5%
                    </span>
                    <span class="text-gray-400">
                         vs last month
                    </span>
                </div>
            </div>
        </div>
        <div class="p-8 bg-white shadow-lg rounded-2xl dark:bg-gray-800 w-1/4">
            <div class="flex items-center">
                <span class="relative p-4 bg-purple-200 rounded-xl">
                    <svg width="40" fill="currentColor" height="40" class="absolute h-4 text-purple-500 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-black text-md dark:text-white">
                  Verified
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="my-4 text-5xl font-bold text-left text-gray-700 dark:text-gray-100">
                    {{ $statusUsersVer }}
                    <span class="text-sm">
                        $
                    </span>
                </p>
                <div class="flex items-center text-sm text-green-500">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                    <span>
                        5.5%
                    </span>
                    <span class="text-gray-400">
                         vs last month
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <h1 class="text-2xl font-bold mb-2 self-start">Recent User</h1>
    <table class="table-auto min-w-full divide-y divide-gray-200 shadow-md">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Profile Photo</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Username</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($recentUsers as $user)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $user->id }}</td>
                <td class="px-6 py-4 whitespace-no-wrap"><img src="{{ $user->profilePhoto ? $user->profilePhoto : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}"" alt="Profile Photo" class="w-10 h-10 rounded-full object-cover"></td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $user->username }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $user->fullName }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    

@endsection