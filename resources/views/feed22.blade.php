@vite('resources/css/app.css')
<div class="outerfeeed" style="display: flex; flex-direction: column;">

    @include('components.nav.revamp')
    <div
    class="outerfeeds w-full min-h-dvh overflow-y-auto p-2 bg-gray-100 flex gap-1 items-start justify-center max-sm:flex-col max-[640px]:items-center"
>
<div
class="innerfeed1 bg-pink-200 w-3/4 grid place-items-center"
style="height: 90%;"
>
@if(isset($data) && count($data) > 0) @foreach ($data as $item)
    <div role="status" class="max-w-sm p-4 h-dvh border border-gray-200 rounded shadow animate-pulse md:p-6 dark:border-gray-700" id="skeleton">
        <div class="flex items-center my-2">
            <svg class="w-10 h-10 me-3 text-gray-200 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
             </svg>
             <div>
                 <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32 mb-2"></div>
                 <div class="w-48 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
             </div>
         </div>
        <div class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded dark:bg-gray-700">
            <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"/>
                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
            </svg>
        </div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        
        <span class="sr-only">Loading...</span>
    </div>
        
        <div
            class="flex flex-col w-11/12 gap-8 bg-red-500 p-2 rounded-lg overflow-hidden"
            style="min-height: 100dvh; display: none;" id="actualContent"
        >
                   
            <div
                class="outerrrrkonten w-full bg-green-500"
                style="height: 80dvh" 
            >
            <div
            class="row1 flex items-center gap-2"
            style="background-color: brown; height: 10vh"
        >
            <img
                src="{{ $item['profilePhoto'] }}"
                alt="{{ $item['fullName'] }}"
                class="w-10 h-10 object-cover rounded-full mr-4"
            />
            <h2 class="text-lg font-semibold break-all">
                {{ $item["fullName"] }}
            </h2>
        </div>
                <div
                    class="midfed bg-purple-600 w-full"
                    style="background-color: purple; height: 80%"
                >
                    <iframe
                        id="video{{ $loop->iteration }}"
                        width="100%"
                        height="80%"
                        src="{{ $item['link_video'] }}"
                        frameborder="0"
                        allow="autoplay"
                        allowfullscreen
                        class="w-full h-full rounded-lg"
                        data-video-url="{{ $item['link_video'] }}"
                    ></iframe>
                </div>
                
                <div class="btmkntn h-auto text-blue-500 flex items-center justify-between">
                    <p class="text-gray-600 mb-4">{{ $item["deskripsi"] }}</p>
                    <p class="text-gray-600 mb-4">{{ $item["kategori"] }}</p>
                </div>
            </div>            
            
        </div>
    </div>
    @endforeach @else
            <p>Kontes belum dimulai</p>
            @endif
    <div class="innerfeed2 w-1/4 bg-red-400" style="min-height: 100dvh">
        <h1>tes</h1>
    </div>
</div>
@include('components.footer.footer')

<script src="{{ asset('js/embedyt.js') }}"></script>
<script src="{{ asset('js/skeleton.js') }}"></script>

    </div>