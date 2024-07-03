
    
    function embedYouTube() {
        var iframes = document.querySelectorAll("iframe");

        iframes.forEach(function (iframe) {
            var videoUrl = iframe.dataset.videoUrl;

            if (isYouTubeLink(videoUrl)) {
                var videoId = videoUrl.match(
                    /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/
                )[1];
                iframe.src =
                    "https://www.youtube.com/embed/" +
                    videoId +
                    "?controls=0&autoplay=1";
            }
        });
    }

    
    function isYouTubeLink(url) {
        return url.includes("youtube.com") || url.includes("youtu.be");
    }

    
    window.onload = function () {
        embedYouTube();
    };
