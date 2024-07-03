@vite('resources/css/app.css')

<div class="container mx-auto px-4 py-8 w-full h-dvh">
    <div class="flex flex-wrap">
        @if(isset($data) && count($data) > 0)
            @foreach ($data as $item)
                <div class="w-full p-4" style="height: 50vh;">
                    <div class="flex items-center">
                        <img
                            src="{{ $item['profilePhoto'] }}"
                            alt="{{ $item['fullName'] }}"
                            class="w-10 h-10 object-cover rounded-full mr-4"
                        />
                        <h2 class="text-lg font-semibold">{{ $item["fullName"] }}</h2>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $item["deskripsi"] }}</p>
                    <div class="w-full h-full rounded-lg">
                        <iframe
                            id="video{{ $loop->iteration }}"
                            width="560"
                            height="315"
                            src="{{ $item['link_video'] }}"
                            frameborder="0"
                            allow="autoplay"
                            allowfullscreen
                            class="w-full h-full rounded-lg"
                            data-video-url="{{ $item['link_video'] }}"
                        ></iframe>
                    </div>
                </div>
            @endforeach
        @else
            <p>Kontes belum dimulai</p>
        @endif
    </div>
</div>



<script>
    // Fungsi untuk mengecek apakah URL adalah tautan YouTube dan mengubah menjadi embed YouTube
    function embedYouTube() {
        var iframes = document.querySelectorAll('iframe');
        
        iframes.forEach(function(iframe) {
            var videoUrl = iframe.dataset.videoUrl;

            if (isYouTubeLink(videoUrl)) {
                var videoId = videoUrl.match(/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/)[1];
                iframe.src = 'https://www.youtube.com/embed/' + videoId + '?controls=0&autoplay=1';
            }
        });
    }

    // Fungsi untuk mengecek apakah URL adalah tautan YouTube
    function isYouTubeLink(url) {
        return url.includes('youtube.com') || url.includes('youtu.be');
    }

    // Panggil fungsi embedYouTube() setelah semua iframe dimuat
    window.onload = function() {
        embedYouTube();
    };
</script>
