<?php

$data = array(
    array(
        "image" => asset('images/motor.webm'), 
        "judul" => "Lexi LX",
        "tag" => "#Yamaha"
    ),
    array(
        "image" => asset('images/bmw.webp'),
        "judul" => "BMW",
        "tag" => "#BMWExperience"
    ),
    array(
        "image" => asset('images/CivicGReview.webm'), 
        "judul" => "Civic Genio",
        "tag" => "#Honda"
    ),
    array(
        "image" => asset('images/harley.webp'),
        "judul" => "Harley",
        "tag" => "#RoadKing, #LiveToRide"
    ),
    array(
        "image" => asset('images/corola2.webm'), 
        "judul" => "Great Corolla",
        "tag" => "#Toyota"
    ),
    array(
        "image" => asset('images/genioturbo.webp'),
        "judul" => "Genio Turbo",
        "tag" => "#Honda"
    ),
    array(
        "image" => asset('images/wulingg.webm'),
        "judul" => "Wuling",
        "tag" => "#Wuling"
    ),
    array(
        "image" => asset('images/creta.webp'),
        "judul" => "CRETA",
        "tag" => "#Toyota"
    ),
);

?>
<head>
    <link rel="stylesheet" href="{{ asset('css/marque.css') }}">
</head>
<style>
    @media only screen and (max-width: 600px){
        .carditemmarq{
            min-width: 11rem;
            min-height: 11rem;
        }
    }
</style>

<div class="scrolling-text-container">
    <div class="scrolling-text-inner gap-4" style="--marquee-speed: 9s; --direction:scroll-left" role="marquee">
        <?php foreach ($data as $index => $item) : ?>
            <div class="carditemmarq rounded-3xl min-w-64 min-h-64 relative overflow-hidden">
                <div class="outerrr relative h-full bg-black">
                    <div class="opverlayy w-full h-full top-0 absolute" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.411)); height: 100%; position: absolute; z-index: 1;"></div>
                    <div id="media-<?php echo $index; ?>" class="media-container bg-cover bg-center rounded-3xl w-64 h-64 absolute top-0 left-0">
                        <?php if ($index % 2 === 0) : ?>
                        <video autoplay muted loop class="w-full h-full object-cover">
                            <source src="<?php echo $item['image']; ?>" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                    <?php else : ?>
                    <img src="<?php echo $item['image']; ?>" class="w-full h-full object-cover">
                    <?php endif; ?>

                    </div>
                    <div class="clastesks absolute bottom-4 left-4 text-white z-20">
                        <h5><?php echo $item['judul']; ?></h5>
                        <div class="tagg flex">
                            <?php
                            $tags = explode(', ', $item['tag']);
                            foreach ($tags as $tag) {
                                echo '<h3 class="border py-1 px-2 border-white rounded-xl text-center mr-2 text-xs">' . $tag . '</h3>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const mediaContainers = document.querySelectorAll(".media-container");
        mediaContainers.forEach((container, index) => {
            const videoElement = container.querySelector("video");
            const imageElement = container.querySelector("img");
            if (index % 2 === 0 && videoElement) {
                videoElement.style.display = "block"; // Ganti ke block
                imageElement.style.display = "none"; // Ganti ke none
            } else if (index % 2 !== 0 && imageElement) {
                videoElement.style.display = "none"; // Ganti ke none
                imageElement.style.display = "block"; // Ganti ke block
            }
        });
    });
</script>
