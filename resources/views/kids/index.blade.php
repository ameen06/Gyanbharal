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

<x-slot:seo>
<title>Unleash the Wonder: Kids' Corner for Fun and Learning | Children's Directory</title>
<meta name="og:title" content="Unleash the Wonder: Kids' Corner for Fun and Learning | Children's Directory">
<meta name="og:description" content="Discover a world of excitement tailored just for kids on our dedicated 'Kids' page. Engage in entertaining activities, explore fascinating facts, and embark on adventures that spark curiosity and imagination">
<meta name="description" content="Discover a world of excitement tailored just for kids on our dedicated 'Kids' page. Engage in entertaining activities, explore fascinating facts, and embark on adventures that spark curiosity and imagination">
</x-slot:seo>

<div class="w-full mt-4 lg:mt-[8%]">
    {{-- search input --}}
    <div class="w-full px-4">
        @if (count($slides) > 0)
        <section id="image-carousel" class="splide" aria-label="Beautiful Images">
            <div class="splide__track">
                  <ul class="splide__list">
                        @foreach ($slides as $slide)   
                        <li class="splide__slide">
                            <img src="{{env('IMAGEKIT_ENDPOINT').$slide->image_link}}" alt="Slides">
                        </li>
                        @endforeach
                  </ul>
            </div>
        </section>
        @else
        <p></p>
        @endif
    </div>
    
    <div class="w-full mt-6 px-4 flex flex-col">
        <h2 class="font-bold text-lg">Videos</h2>

        <div class="w-full mt-4 grid grid-cols-2 gap-4">
            @forelse ($videos as $video)
            <a href="{{$video->video_link}}" target="_blank" class="w-full group">
                <div class="w-full flex justify-center items-center relative">
                    <img src="{{env('IMAGEKIT_ENDPOINT').$video->thumbnail_link}}" alt="{{$video->video_title}}" class="w-full rounded-lg shadow-md group-hover:rounded-none">

                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-10 lg:w-16 opacity-60 z-10" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="m9 17 8-5-8-5z"></path></svg>
                </div>
                <h2 class="mt-2 text-sm md:text-xl text-gray-800 font-semibold group-hover:text-blue-600 line-clamp-3">{{$video->video_title}}</h2>
            </a>
            @empty
            <p class="text-sm text-gray-400">No videos</p>
            @endforelse
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