@extends('dashboard.revamp') 

@section('content')
<button id="open-category-modal" class="bg-red-500 float-right text-white py-1 px-4 rounded-md">Add</button>
<table class="min-w-full divide-y divide-gray-200 shadow-sm hover:shadow-lg">
    <thead class="bg-gray-50">
        <tr>
            <th
                scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
            >
                ID
            </th>
            <th
                scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
            >
                at
            </th>
            <th
                scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
            >
                Category
            </th>
            <th
                scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
            >
                Status
            </th>
            
            <th scope="col" class="relative px-6 py-3 font-bold">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($categories as $category)
        <tr>
            <form
                action="{{ route('cat.update_category', ['id' => $category->id ] ) }}"
                method="POST"
            >
                @csrf @method('POST')
                <td class="px-6 py-4 whitespace-nowrap">{{ $category->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap ">
                    {{ \Carbon\Carbon::parse($category->created_at)->format('l, d M Y') }}
                </td>
                
                <td class="px-6 py-4">
                    <input
                        name="category"
                        type="text"
                        value="{{ $category->category }}"
                        class="border-gray-300 w-auto focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    />
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <select name="status" id="status" class="bg-transparent">
                        <option value="on" {{ $category->
                            status == 'on' ? 'selected' : '' }}>On
                        </option>
                        <option value="off" {{ $category->
                            status == 'off' ? 'selected' : '' }}>Off
                        </option>
                    </select>
                </td>
                <td
                    class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                >
                    <button
                        type="submit"
                        class="text-indigo-600 hover:text-indigo-900 bg-pink-300 py-2 px-3"
                    >
                        Update
                    </button>
                </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
@include('components.modal.categoryadd')
@endsection
