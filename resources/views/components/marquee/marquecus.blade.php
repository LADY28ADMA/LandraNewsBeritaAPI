<!-- Component: Logos carousel -->
<div class="relative w-full glide-09 my-auto">
    <h1 class="text-3xl font-bold text-center hover:text-gray-600 my-4">Our Sponsor</h1>
    <!-- Slides -->
    <div data-glide-el="track">
        <ul class="whitespace-no-wrap flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform] relative flex w-full overflow-hidden p-0 pb-12">
            <li>
                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-1.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
            </li>
            <li>
                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-2.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
            </li>
            <li>
                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-3.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
            </li>
            <li>
                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-4.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
            </li>
            <li>
                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-5.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
            </li>
            <li>
                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-6.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
            </li>
        </ul>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

<script>
    var glide09 = new Glide('.glide-09', {
        type: 'carousel',
        autoplay: 1,
        animationDuration: 4500,
        animationTimingFunc: 'linear',
        perView: 3,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 2
            },
            640: {
                perView: 1,
                gap: 36
            }
        },
    });

    glide09.mount();
</script>
<!-- End Logos carousel -->