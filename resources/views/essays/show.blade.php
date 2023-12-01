<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    {{$essay->title}}
</x-slot:title>

<x-slot:seo>
<title>{{$essay->title}} | Children's Directory</title>
<meta name="og:title" content="{{$essay->title}} | Children's Directory">
<meta name="og:description" content="Encourage creativity and expression on our 'Essay' page, where young writers can share their thoughts on adventures, imagination, and more. Explore a world of words and storytelling">
<meta name="description" content="Encourage creativity and expression on our 'Essay' page, where young writers can share their thoughts on adventures, imagination, and more. Explore a world of words and storytelling">
</x-slot:seo>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h2 class="font-bold text-2xl">{{$essay->title}}</h2>

        <img src="{{env('IMAGEKIT_ENDPOINT').$essay->image_link}}" alt="{{$essay->title}}" class="w-full mt-6">

        <div class="mt-6 text-base text-gray-800 article">
            {!! $essay->content !!}
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>