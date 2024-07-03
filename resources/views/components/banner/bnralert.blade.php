@if(Auth::check())
    @if(Auth::user()->status === null)
        <div class="banneralert w-full text-center bg-red-400">
            <h1 class="text-white">Harap lengkapi profile</h1>
        </div>
    @endif
@endif
