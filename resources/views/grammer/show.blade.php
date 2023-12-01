<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    {{$grammer->title}}
</x-slot:title>

<x-slot:seo>
    <title>Mastering Language: {{$grammer->title}} | Children's Directory</title>
    <meta name="og:title" content="Mastering Language: {{$grammer->title}} | Children's Directory">
    <meta name="og:description" content="Enhance language skills with our 'Grammar' page, offering engaging lessons for kids. Make learning grammar enjoyable and effective as young minds grasp the foundations of language in a playful way">
    <meta name="description" content="Enhance language skills with our 'Grammar' page, offering engaging lessons for kids. Make learning grammar enjoyable and effective as young minds grasp the foundations of language in a playful way">
</x-slot:seo>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h2 class="font-bold text-2xl">{{$grammer->title}}</h2>

        <img src="{{env('IMAGEKIT_ENDPOINT').$grammer->image_link}}" alt="{{$grammer->title}}" class="w-full mt-6">

        <div class="mt-6 text-base text-gray-800 article">
            {!! $grammer->content !!}
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>