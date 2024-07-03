@vite('resources/css/app.css')
<!-- component -->
@include('components.nav.revamp')
<div class="fidutama w-full lg:min-h-dvh pt-12" style="background-color: #f5f5f5;">
    <style>
        .transition:hover > h2{
            color: white;
        }

        @media (max-width: 940px) {
            /* .fidutama{
                min-height: 250dvh;
            } */
        }
    </style>
    <div class="py-10 sm:py-16 block lg:py-24 relative bg-opacity-50 z-40" style="min-height: 100dvh;" >
        <div
            class="relative mx-auto h-full px-4 pb-20 md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 min-h-dvh">

            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
                <div class="max-w-xl mx-auto text-center">
                    <div class="inline-flex px-4 py-1.5 mx-auto rounded-full">
                        <p class="text-4xl font-semibold tracking-wide text-g uppercase">SHOWCASE</p>
                    </div>
                    
                </div>
                <div class="grid grid-cols-1 gap-2 mt-12 sm:grid-cols-3 lg:mt-20">
                    @if(isset($data) && count($data) > 0)
                        @foreach ($data as $item)
                            <div class="transition-all duration-1000 bg-white hover:bg-red-400 hover:text-white hover:shadow-xl m-2 p-4 relative z-40 group" style="min-height: 350px; ">
                                <div class="absolute bg-red-500/50 top-0 left-0 w-24 h-1 z-30 transition-all duration-200 group-hover:bg-white group-hover:w-1/2"></div>
                                <div class="py-2 flex flex-col items-center justify-between h-full gap-4">
                                    <div class="flex w-full items-center">
                                        
                                        
                                        <!-- <img src="{{ isset($item['profilePhoto']) ? $item['profilePhoto'] : 'https://momentusss.vercel.app/static/media/ryujine2.8193c3ce1391b6d54d84.jpg' }}" alt="{{ isset($item['fullName']) ? $item['fullName'] : 'User' }}" class="w-10 h-10 object-cover rounded-full mr-4"> -->
                                        <img
                                            src="{{ $item['profilePhoto'] }}"
                                            alt="{{ $item['fullName'] }}"
                                            class="w-10 h-10 object-cover rounded-full mr-4"
                                        />



                                        <h2 class="text-lg font-semibold break-all">{{ ucwords(strtolower($item["fullName"])) }}</h2>
                                    </div>
                                    <iframe id="video{{ $loop->iteration }}" width="100%" height="50%" src="{{ $item['link_video'] }}" frameborder="0" allow="autoplay" allowfullscreen class="w-full h-full rounded-lg" data-video-url="{{ $item['link_video'] }}"></iframe>
                                    <div class="btmkntn w-full flex items-center justify-between">
                                        <h2 class="hover:text-white font-semibold leading-tight">{{ ucwords(strtolower($item["deskripsi"])) }}</h2>
                                        <!-- <p class="text-gray-600 mb-4">{{ $item["kategori"] }}</p> -->
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold leading-tight text-pink-900"
                                        >
                                            <span
                                                aria-hidden
                                                class="absolute inset-0 opacity-50 rounded-full bg-pink-200"
                                            ></span>
                                            <span class="relative"
                                                >
                                                {{ $item["kategori"] }}</span
                                            >
                                        </span>
                                    </div>
                                </div>
                            </div>                   
                        @endforeach
                    @else
                        <p class="mx-auto">Kontes belum dimulai</p>
                    @endif
                </div>
            </div>
            
            
        </div>
        
        <script src="{{ asset('js/embedyt.js') }}"></script>
        <script src="{{ asset('js/skeleton.js') }}"></script>
    </div>
