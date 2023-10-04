<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    Phrases
</x-slot:title>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h1 class="font-bold text-2xl">Phrases</h1>

        <p class="mt-4 text-base text-gray-800">
            A phrase, according to the Oxford Learner's Dictionary, is defined as “a group of words without a finite verb, especially one that forms part of a sentence.” According to the Cambridge Dictionary, a phrase is defined as “a group of words that is part of, rather than the whole of a sentence.” The Collins Dictionary defines a phrase as “a short group of words that people often use as a way of saying something. The meaning of a phrase is often not obvious from the meaning of the individual words in it.” It is also defined as “a small group of words which forms a unit, either on its own or within a sentence.” The Merriam-Webster Dictionary defines a phrase as “a word or group of words forming a syntactic constituent with a single grammatical function.”
        </p>

        <h2 class="mt-6 text-2xl font-semibold text-gray-800">Types of Phrases</h2>
        <div class="mt-6 w-full">
            @foreach ($phrases as $phrase)
            <a href="{{route('phrases.show', $phrase->id)}}" class="w-full px-4 py-2 border-y border-gray-200 text-lg font-semibold inline-flex items-center gap-4 hover:bg-cyan-500 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #22d3ee;transform: ;msFilter:;"><path d="M11.999 1.993c-5.514.001-10 4.487-10 10.001s4.486 10 10.001 10c5.513 0 9.999-4.486 10-10 0-5.514-4.486-10-10.001-10.001zM12 19.994c-4.412 0-8.001-3.589-8.001-8s3.589-8 8-8.001C16.411 3.994 20 7.583 20 11.994c-.001 4.411-3.59 8-8 8z"></path><path d="M12 10.994H8v2h4V16l4.005-4.005L12 7.991z"></path></svg>
                {{$phrase->title}}
            </a>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
@endpush
</x-page-layout>