<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    Daily Facts
</x-slot:title>

<x-slot:seo>
<title>{{$daily_fact->title}} | Children's Directory</title>
<meta name="og:title" content="{{$daily_fact->title}} | Children's Directory">
<meta name="og:description" content="Fuel young minds with our 'Daily Facts' page, delivering a daily dose of intriguing and educational information. Encourage curiosity and learning through bite-sized facts that captivate young imaginations">
<meta name="description" content="Fuel young minds with our 'Daily Facts' page, delivering a daily dose of intriguing and educational information. Encourage curiosity and learning through bite-sized facts that captivate young imaginations">
</x-slot:seo>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h2 class="font-bold text-2xl">{{$daily_fact->title}}</h2>

        <img src="{{env('IMAGEKIT_ENDPOINT').$daily_fact->image_link}}" alt="{{$daily_fact->title}}" class="w-full mt-6">

        <div class="mt-6 text-base text-gray-800 article">
            {!! $daily_fact->content !!}
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>