<x-main-layout>
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
Gyanbharal
</x-slot:title>

<div class="w-full rounded-xl overflow-hidden shadow-sm">
    <section id="home-banners" class="splide" aria-label="Gyanbharal Banners">
        <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($slides as $slide)   
                    <li class="splide__slide">
                        <img src="https://ik.imagekit.io/k4cixy45r/{{$slide->image_link}}" alt="Slides">
                    </li>
                    @endforeach
                </ul>
        </div>
    </section>
</div>

<div class="w-full mt-8 grid grid-cols-2 lg:grid-cols-3 gap-6">
    <a href="{{route('e-a-words')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-orange-600">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-orange-400 group-hover:bg-orange-600">
                <h2 class="text-base font-semibold text-gray-900">A - অ</h2>
            </div>
        </div>
    </a>

    <a href="{{route('a-e-words')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-lime-600">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-lime-400 group-hover:bg-lime-600">
                <h2 class="text-base font-semibold text-gray-900">অ - A</h2>
            </div>
        </div>
    </a>

    <a href="{{route('kids-playstream')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-green-600">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-green-400 group-hover:bg-green-600">
                <h2 class="text-base font-semibold text-gray-900">Kids</h2>
            </div>
        </div>
    </a>

    <a href="{{route('daily-facts')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-yellow-600">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-yellow-400 group-hover:bg-yellow-600">
                <h2 class="text-base font-semibold text-gray-900">Daily Facts</h2>
            </div>
        </div>
    </a>

    <a href="{{route('quiz')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-rose-600">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-rose-400 group-hover:bg-rose-600">
                <h2 class="text-base font-semibold text-gray-900">Quiz</h2>
            </div>
        </div>
    </a>

    <a href="{{route('essays.index')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-cyan-600">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-cyan-400 group-hover:bg-cyan-600">
                <h2 class="text-base font-semibold text-gray-900">Essay</h2>
            </div>
        </div>
    </a>

    <a href="{{route('phrases.index')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-purple-600">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-purple-400 group-hover:bg-purple-600">
                <h2 class="text-base font-semibold text-gray-900">Phrases</h2>
            </div>
        </div>
    </a>

    <a href="{{route('grammer.index')}}" class="w-full h-fit group">
        <div class="w-full bg-white pt-4 text-center rounded-lg shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-sky-300">
            <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

            <div class="w-full px-4 py-2 mt-4 bg-sky-400 group-hover:bg-sky-600">
                <h2 class="text-base font-semibold text-gray-900">Grammer</h2>
            </div>
        </div>
    </a>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    new Splide('#home-banners').mount();
</script>
@endpush
</x-main-layout>