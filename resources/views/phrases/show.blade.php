<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    {{$phrase->title}}
</x-slot:title>

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