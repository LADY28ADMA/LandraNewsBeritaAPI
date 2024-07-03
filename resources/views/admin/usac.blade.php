@extends('dashboard.revamp') @section('content')
<div class="py-1 max-w-full">
    <div class="w-auto max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-x-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            <div class="p-4">
                <form
                    action="{{ route('acac.show_profile') }}"
                    method="get"
                    class="mb-4"
                >
                
                    <div class="flex w-full items-center justify-end">
                        <input
                            type="text"
                            name="query"
                            placeholder="email/nama/username"
                            class="w-1/5 px-4 py-2 mr-2 rounded-md border border-gray-300 focus:outline-none focus:border-indigo-500"
                        />
                        
                        <button
                            type="submit"
                            class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-indigo-600"
                        >
                            Cari
                        </button>
                    </div>
                </form>
                <table class="max-w-full divide-y table-auto divide-gray-200 shadow-md rounded-sm overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr class="odd:bg-white text-center even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700 dark:text-white">
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                No
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white"
                            >
                                id
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                Username
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                pp
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                email
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 hover:cursor-pointer text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                full name
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                Role
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                Status
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($userProfiles as $index => $userProfile)
                        <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-gray-700">
                            <form
                                action="{{ route('acac.update_profile', ['id' => $userProfile]) }}"
                                method="POST"
                            >
                                @csrf @method('POST')
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $index + 1 }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $userProfile->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{$userProfile->username}}
                                    </div>
                                </td>
                                <td class="px-2 py-3">
                                    <img
                                        class="w-8 h-8 rounded-full object-cover"
                                        src="{{ $userProfile->profilePhoto ? $userProfile->profilePhoto : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}"
                                        alt="ppuser"
                                    />
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{$userProfile->email}}
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <input
                                            type="text"
                                            name="fullName"
                                            value="{{$userProfile->fullName}}"
                                        />
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold leading-tight @if($userProfile->role == 'admin') text-green-900 @else text-pink-900 @endif">
                                        <span aria-hidden
                                            class="absolute inset-0 opacity-50 rounded-full @if($userProfile->role == 'admin') bg-green-200 @else bg-pink-200 @endif"></span>
									<span class="relative">{{ $userProfile->role }}</span>
									</span>
                                </div>
                                
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <select name="status" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500">
                                            <option class="bg-red-500" value="" {{ is_null($userProfile->status) ? 'selected' : '' }}>Not Join</option>
                                            <option class="bg-green-400" value="register" {{ $userProfile->status == 'register' ? 'selected' : '' }}>Register</option>
                                            <option class="bg-yellow-300" value="verifikasi" {{ $userProfile->status == 'verifikasi' ? 'selected' : '' }}>Verifikasi</option>
                                            <option value="start" {{ $userProfile->status == 'start' ? 'selected' : '' }}>Start</option>
                                            <option value="end" {{ $userProfile->status == 'end' ? 'selected' : '' }}>End</option>
                                        </select>
                                        
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button
                                        type="submit"
                                        class="text-indigo-600 hover:text-indigo-900 bg-pink-300 py-2 px-3 rounded-md"
                                    >
                                        Update
                                    </button>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4 gajee">
                {{ $userProfiles->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
