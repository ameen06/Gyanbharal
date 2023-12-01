<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    Essays
</x-slot:title>

<x-slot:seo>
<title>"Express and Create: Kids' Essays on Adventures and Imagination | Children's Directory</title>
<meta name="og:title" content=""Express and Create: Kids' Essays on Adventures and Imagination | Children's Directory">
<meta name="og:description" content="Encourage creativity and expression on our 'Essay' page, where young writers can share their thoughts on adventures, imagination, and more. Explore a world of words and storytelling">
<meta name="description" content="Encourage creativity and expression on our 'Essay' page, where young writers can share their thoughts on adventures, imagination, and more. Explore a world of words and storytelling">
</x-slot:seo>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($essays as $essay)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">
                <a href="{{route('essays.show', [$essay->id, str_replace(" ", "-", $essay->title)])}}">
                    <img class="rounded-t-lg" src="{{env('IMAGEKIT_ENDPOINT').$essay->image_link}}" alt="{{$essay->title}}" />
                </a>
                <div class="p-5">
                    <a href="{{route('essays.show', [$essay->id, str_replace(" ", "-", $essay->title)])}}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900">{{$essay->title}}</h5>
                    </a>

                    <a href="{{route('essays.show', [$essay->id, str_replace(" ", "-", $essay->title)])}}" class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>