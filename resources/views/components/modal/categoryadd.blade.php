<div id="category-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 flex justify-center items-center h-full w-full z-50" style="background: transparent; backdrop-filter: blur(1px);">
    <div class="relative p-4 bg-white rounded-lg w-full max-w-md shadow-md">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 border-b">
            <h3 class="text-lg font-semibold text-gray-900">New Category</h3>
            <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none" data-modal-hide="category-modal">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 space-y-4">
            @if(Auth::check())
                <!-- Form upload profile image -->
                <form id="editable-form3" action="{{ route('cat.create_category', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!-- Form upload profile image -->
                    <div class="mb-4">
                        <label for="profile-image" class="block mb-2 font-medium">Nama Kategori</label>
                        <input type="text" id="categories" name="category" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <!-- Form upload cover image -->
                    <div class="mb-4">
                        <label for="cover-image" class="block mb-2 font-medium">Status</label>
                        <select name="status" id="status" class="bg-transparent">
                            <option value="on" {{ $category->
                                status == 'on' ? 'selected' : '' }}>On
                            </option>
                            <option value="off" {{ $category->
                                status == 'off' ? 'selected' : '' }}>Off
                            </option>
                        </select>
                    </div>
                </form>
            @else
                <p class="text-gray-500">login dulu.</p>
            @endif
        </div>
        <!-- Modal footer -->
        <div class="flex items-center justify-end p-4 border-t">
            @if(Auth::check())
                <button type="submit" form="editable-form3" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none">Upload</button>
            @else
                <a href="#" class="px-4 py-2 text-white bg-gray-500 rounded-lg hover:bg-gray-600 focus:outline-none">Login</a>
            @endif
        </div>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('category-modal').classList.add('hidden');
    }


    document.getElementById('open-category-modal').addEventListener('click', function() {
        document.getElementById('category-modal').classList.remove('hidden');
    });

    document.querySelector('[data-modal-hide="category-modal"]').addEventListener('click', function() {
        closeModal();
    });
</script>