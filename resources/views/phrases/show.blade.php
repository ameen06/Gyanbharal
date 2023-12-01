<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    {{$phrase->title}}
</x-slot:title>

<x-slot:seo>
<title>Words to Inspire: {{$phrase->title}} | Children's Directory</title>
<meta name="og:title" content="Words to Inspire: {{$phrase->title}} | Children's Directory">
<meta name="og:description" content="Explore the 'Phrases' page, where kids can discover and share inspiring and fun phrases for every occasion. Foster language development and creativity through a collection of delightful expressions">
<meta name="description" content="Explore the 'Phrases' page, where kids can discover and share inspiring and fun phrases for every occasion. Foster language development and creativity through a collection of delightful expressions">
</x-slot:seo>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h2 class="font-bold text-2xl">{{$phrase->title}}</h2>

        <div class="mt-6 text-base text-gray-800 article">
            {!! $phrase->content !!}
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>