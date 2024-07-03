@if(Auth::check())
<form
    id="editable-form"
    action="{{ route('acac.update_profile', ['id' => Auth::id()]) }}"
    method="POST"
    enctype="multipart/form-data"
    class="w-full"
>
    @csrf @method('POST')
    <div class="space-y-5 my-2 lg:w-2/3 md:w-full" data-hs-toggle-password-group="">
        <!-- Form Group -->
        <div class="w-full">
          <label for="hs-toggle-password-multi-toggle-np" class="block text-sm mb-2">New password</label>
          <div class="relative lg:1/3 md:w-full">
            <input id="hs-toggle-password-multi-toggle-np" name="password" type="password" required class="py-3 px-4 w-full border-2 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter new password">
            <button type="button" data-hs-toggle-password='{
                "target": ["#hs-toggle-password-multi-toggle", "#hs-toggle-password-multi-toggle-np"]
              }' class="absolute top-0 end-0 p-3.5 rounded-e-md">
              <svg class="flex-shrink-0 size-3.5 text-gray-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
              </svg>
            </button>
          </div>
        </div>
        <!-- End Form Group -->
      
        <!-- Form Group -->
        <div class="w-full">
          <label for="hs-toggle-password-multi-toggle" class="block text-sm mb-2">Retype password</label>
          <div class="relative">
            <input id="hs-toggle-password-multi-toggle" type="password" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required placeholder="Retype new password">
            <button type="button" data-hs-toggle-password='{
                "target": ["#hs-toggle-password-multi-toggle", "#hs-toggle-password-multi-toggle-np"]
              }' class="absolute top-0 end-0 p-3.5 rounded-e-md">
              <svg class="flex-shrink-0 size-3.5 text-gray-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
              </svg>
            </button>
          </div>
        </div>
        <!-- End Form Group -->
      </div>
    
    <button
        type="submit"
        id="submit-pw"
        class="lg:w-2/3 my-4 mx-auto max-sm:w-full bg-red-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-red-600"
    >
        Submit
    </button>
</form>
<script>
    const form = document.getElementById('editable-form');
    const newPasswordInput = document.getElementById('hs-toggle-password-multi-toggle-np');
    const retypePasswordInput = document.getElementById('hs-toggle-password-multi-toggle');

    form.addEventListener('submit', function(event) {
        if (newPasswordInput.value !== retypePasswordInput.value) {
            event.preventDefault(); // Prevent form submission
            alert('New password and retype password must match.'); // Display error message
        }
    });
</script>

<script type="module">
    import preline from 'https://cdn.jsdelivr.net/npm/preline@2.1.0/+esm'
    </script>

@include('sweetalert::alert')
@endif
