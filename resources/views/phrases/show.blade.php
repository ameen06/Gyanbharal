<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    {{$phrase->title}}
</x-slot:title>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h2 class="font-bold text-2xl">{{$phrase->title}}</h2>

        <p class="mt-6 text-base text-gray-800">
            {!! $phrase->content !!}
        </p>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>