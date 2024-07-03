<div id="upload-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 flex justify-center items-center h-full w-full z-50" style="background: transparent; backdrop-filter: blur(1px);">
    <div class="relative p-4 bg-white rounded-lg w-full max-w-md shadow-md">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 border-b">
            <h3 class="text-lg font-semibold text-gray-900">Profile & Cover Image</h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="upload-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 space-y-4">
            @if(Auth::check())
                <!-- Form upload profile image -->
                <form id="editable-form2" action="{{ route('acac.update_profile', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!-- Form upload profile image -->
                    <div class="mb-4">
                        <label for="profile-image" class="block mb-2 font-medium">Profile Image</label>
                        <input type="file" id="profile-image" name="profilePhoto" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
                    </div>
                    <!-- Form upload cover image -->
                    <div class="mb-4">
                        <label for="cover-image" class="block mb-2 font-medium">Cover Image</label>
                        <input type="file" id="cover-image" name="coverPhoto" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
                    </div>
                </form>
            @else
                <p class="text-gray-500">You need to be logged in to upload images.</p>
            @endif
        </div>
        <!-- Modal footer -->
        <div class="flex items-center justify-end p-4 border-t">
            @if(Auth::check())
                <button type="submit" form="editable-form2" class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none">Simpan</button>
            @else
                <a href="#" class="px-4 py-2 text-white bg-gray-500 rounded-lg hover:bg-gray-600 focus:outline-none">Login</a>
            @endif
        </div>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('upload-modal').classList.add('hidden');
    }


    document.getElementById('open-upload-modal').addEventListener('click', function() {
        document.getElementById('upload-modal').classList.remove('hidden');
    });

    document.querySelectorAll('[data-modal-hide="upload-modal"]').forEach(function(button) {
        button.addEventListener('click', function() {
            document.getElementById('upload-modal').classList.add('hidden');
            document.getElementById('upload-modal').setAttribute('aria-hidden', 'true');
        });
    });
</script>