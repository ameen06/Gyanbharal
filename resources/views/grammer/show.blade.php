<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    {{$grammer->title}}
</x-slot:title>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h2 class="font-bold text-2xl">{{$grammer->title}}</h2>

        <img src="https://ik.imagekit.io/k4cixy45r/{{$grammer->image_link}}" alt="{{$grammer->title}}" class="w-full mt-6">

        <div class="mt-6 text-base text-gray-800">
            {!! $grammer->content !!}
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>