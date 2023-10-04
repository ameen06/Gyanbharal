<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    Daily Facts
</x-slot:title>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h2 class="font-bold text-2xl">{{$daily_fact->title}}</h2>

        <img src="https://ik.imagekit.io/k4cixy45r/{{$daily_fact->image_link}}" alt="{{$daily_fact->title}}" class="w-full mt-6">

        <div class="mt-6 text-base text-gray-800 article">
            {!! $daily_fact->content !!}
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>