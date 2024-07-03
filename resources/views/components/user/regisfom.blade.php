@if(Auth::check())
<form
    id="editable-form"
    action="{{ route('acac.update_profile', ['id' => Auth::id()]) }}"
    method="POST"
    enctype="multipart/form-data"
    class="w-full"
    
>
    @csrf @method('POST')

    <!-- Name -->
    <div class="mb-4">
        <div class="flex flex-col">
            <label for="name-with-label" class="font-medium mb-2"
                >Name Lengkap <span class="text-red-600">*</span></label
            >
            <input
                type="text"
                id="name-with-label"
                class="rounded-lg lg:w-3/4 max-sm:w-full flex-2 appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                name="fullName"
                value="{{ Auth::user()->fullName }}"
                
            />
        </div>
    </div>

    <!-- Gender -->
<div class="mb-4">
    <label for="gender" class="font-medium mb-5">
        Gender <span class="text-red-600">*</span>
    </label>

    <div class="flex items-center gap-8">
        <label class="inline-flex items-center">
            <input
                type="radio"
                name="gender"
                value="Pria"
                class="w-5 h-5 text-red-600"
                {{ Auth::user()->gender === 'Pria' ? 'checked' : '' }}
            />
            <span class="ml-2 text-lg font-normal"> Pria </span>
        </label>
        <label class="inline-flex items-center">
            <input
                type="radio"
                name="gender"
                value="Wanita"
                class="w-5 h-5 text-red-600"
                {{ Auth::user()->gender === 'Wanita' ? 'checked' : '' }}
            />
            <span class="ml-2 text-lg font-normal"> Wanita </span>
        </label>
    </div>
</div>


    <!-- Phone Number -->
    <div class="mb-4">
        <label for="phone" class="block mb-2 font-medium"
            >No hp <span class="text-red-600">*</span></label
        >
        <input
            type="number"
            id="phone"
            name="phone"
            class="rounded-lg lg:w-3/4 max-sm:w-full flex-2 appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
            placeholder="08111111111"
            value="{{ Auth::user()->phone }}"
            required
        />
    </div>

    

    <!-- Age -->
    <div class="mb-4">
        <label for="age" class="block mb-2 font-medium"
            >ttl <span class="text-red-600">*</span></label
        >
        <input
            type="date"
            id="age"
            name="birthday"
            value="{{ Auth::user()->birthday }}"
            class="rounded-lg lg:w-3/4 max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
            required
        />
    </div>

    <!-- Profession -->
    <div class="mb-4">
        <label for="profesi" class="block mb-2 font-medium"
            >Profesi <span class="text-red-600">*</span></label
        >
        <input
            type="text"
            id="profesi"
            name="job"
            class="rounded-lg lg:w-3/4 max-sm:w-full appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
            placeholder="pendongeng handal"
            value="{{ Auth::user()->job }}"
            required
        />
    </div>

    <!-- Address -->
    <div class="mb-4">
        <label for="address" class="block mb-2 font-medium">
            Alamat <span class="text-red-600">*</span>
        </label>
        <textarea
            id="address"
            name="address"
            class="lg:w-3/4 max-sm:w-full px-4 py-2 text-base border-2 border-gray-300 placeholder-gray-400 bg-white rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
            rows="5"
            cols="20"
            placeholder="jl. maju maju .."
            required
        >{{ Auth::user()->address }}</textarea>
    </div>
    
    <div class="mb-4 lg:w-3/4 max-sm:w-full">
        <label for="sosmed" class="block mb-2 font-medium">
            Social Media link <span class="text-red-600">*</span>
        </label>
        <div class="relative">
            <input
                type="text"
                id="sosmed"
                name="sosmed"
                class="w-full border-gray-300 rounded-lg px-4 py-2 pr-10 border-2 appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                placeholder="Paste here..."
                value="{{ Auth::user()->sosmed }}"
            />
            <button
                type="button"
                id="paste-button"
                class="absolute inset-y-0 right-0 px-3 py-2 text-gray-600 rounded-r-lg focus:outline-none focus:bg-gray-300"
            >
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
            </button>
        </div>
    </div>
    
    
    
    
    <!-- <div class="mb-4">
        <label for="profile-image" class="block mb-2 font-medium">Profile Image</label>
        <input type="file" id="profile-image" name="profilePhoto" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
    </div>
    
    <div class="mb-4">
        <label for="cover-image" class="block mb-2 font-medium">Cover Image</label>
        <input type="file" id="cover-image" name="coverPhoto" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
    </div> -->

    
    <div class="flex items-center mb-4">
        <input
            id="agreement"
            type="checkbox"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
            required
        />
        <label
            for="agreement"
            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-500"
            >Saya Menyetujui
            <a href="#" id="open-modal" class="text-blue-600 hover:underline dark:text-blue-500">Terms of Service</a>.
            </label
        >
    </div>
    
    <button
        type="submit"
        id="submit-btn"
        class="lg:w-3/4 max-sm:w-full bg-red-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 disabled"
    >
        Submit
    </button>
</form>
@include('components.modal.term')
@include('components.modal.chprof')
@include('components.modal.portoaddusr')

<script>
    document.getElementById('paste-button').addEventListener('click', function() {
        navigator.clipboard.readText()
            .then(text => {
                document.getElementById('sosmed').value = text;
            })
            .catch(err => {
                console.error('Failed to read clipboard contents: ', err);
            });
    });
</script>

<script>
    const passwordInput = document.getElementById('password');
    const togglePasswordButton = document.getElementById('toggle-password');

    togglePasswordButton.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Mengubah ikon mata
        if (type === 'password') {
            togglePasswordButton.innerHTML = `
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
            `;
        } else {
            togglePasswordButton.innerHTML = `
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye-closed"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 9c-2.4 2.667 -5.4 4 -9 4c-3.6 0 -6.6 -1.333 -9 -4" /><path d="M3 15l2.5 -3.8" /><path d="M21 14.976l-2.492 -3.776" /><path d="M9 17l.5 -4" /><path d="M15 17l-.5 -4" /></svg>
            `;
        }
    });
</script>
@endif