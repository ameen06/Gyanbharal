<x-page-layout>
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
<style>
    .splide__slide img {
        width: 100%;
        height: auto;
    }
</style>
@endpush

<x-slot:title>
    PlayStream
</x-slot:title>

<div class="w-full mt-4 lg:mt-[8%]">
    {{-- search input --}}
    <div class="w-full px-4">
        <section id="image-carousel" class="splide" aria-label="Beautiful Images">
            <div class="splide__track">
                  <ul class="splide__list">
                        @foreach ($slides as $slide)   
                        <li class="splide__slide">
                            <img src="https://ik.imagekit.io/k4cixy45r/{{$slide->image_link}}" alt="Slides">
                        </li>
                        @endforeach
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1551966775-a4ddc8df052b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2040&q=80" alt="">
                        </li>
                  </ul>
            </div>
        </section>
    </div>
    
    <div class="w-full mt-6 px-4 flex flex-col">
        <h2 class="font-bold text-lg">Videos</h2>

        <div class="w-full mt-4 grid grid-cols-2 gap-4">
            @foreach ($videos as $video)
            <a href="{{$video->video_link}}" target="_blank" class="w-full group">
                <div class="w-full flex justify-center items-center relative">
                    <img src="https://ik.imagekit.io/k4cixy45r/{{$video->thumbnail_link}}" alt="{{$video->video_title}}" class="w-full rounded-lg shadow-md group-hover:rounded-none">

                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-10 lg:w-16 opacity-60 z-10" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="m9 17 8-5-8-5z"></path></svg>
                </div>
                <h2 class="mt-2 text-sm md:text-xl text-gray-800 font-semibold group-hover:text-blue-600 line-clamp-3">{{$video->video_title}}</h2>
            </a>
            @endforeach
            <a href="#" target="_blank" class="w-full group">
                <div class="w-full flex justify-center items-center relative">
                    <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/192865824/original/c2607a7ed84d26c1e04159e1645a4129c094ee70/design-youtube-thumbnail-for-kids-vidoes.jpg" alt="image" class="w-full rounded-lg shadow-md group-hover:rounded-none">

                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-10 lg:w-16 opacity-60 z-10" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="m9 17 8-5-8-5z"></path></svg>
                </div>
                <h2 class="mt-2 text-sm md:text-xl text-gray-800 font-semibold group-hover:text-blue-600 line-clamp-3">Lexi's Playtime Adventures</h2>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    new Splide('#image-carousel').mount();
</script>
@endpush
</x-page-layout>