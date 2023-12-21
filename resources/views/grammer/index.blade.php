<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    English Grammer
</x-slot:title>

<x-slot:seo>
    <title>Mastering Language: Kids' Grammar Lessons Made Fun | Children's Directory</title>
    <meta name="og:title" content="Mastering Language: Kids' Grammar Lessons Made Fun | Children's Directory">
    <meta name="og:description" content="Enhance language skills with our 'Grammar' page, offering engaging lessons for kids. Make learning grammar enjoyable and effective as young minds grasp the foundations of language in a playful way">
    <meta name="description" content="Enhance language skills with our 'Grammar' page, offering engaging lessons for kids. Make learning grammar enjoyable and effective as young minds grasp the foundations of language in a playful way">
</x-slot:seo>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <h1 class="font-bold text-2xl">English Grammer</h1>

        <p class="mt-4 text-base text-gray-800">
            Are you a second language learner? Do you think the word 'grammar' literally scares you? Do not worry. You have come to the right place.
            <br>
            How to learn English can be a question that keeps popping into your mind every now and then. Learning English grammar is one of the factors that many second language learners of English find intimidating. Though they start learning the language, they often seem to give up on themselves when they start with the grammar. This need not be the case with you. The only thing that a second language learner has to do is keep an open mind and cultivate the willpower and determination to get through the English language learning process, no matter what.
            <br>
            Learning grammar need not necessarily be a Herculean task if you do it the right way. Instead of learning all the rules of grammar by heart, try to understand how each grammatical component can be used and how it works differently under different conditions in multiple contexts.
        </p>

        <p class="mt-6 text-base text-gray-800">Here is a set order that you can follow to learn grammar effectively and quickly.</p>

        <div class="mt-6 w-full grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($grammers as $grammer)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow">
                <a href="{{route('grammer.show', [$grammer->id, Str::slug($grammer->title)])}}">
                    <img class="rounded-t-lg" src="{{env('IMAGEKIT_ENDPOINT').$grammer->image_link}}" alt="{{$grammer->title}}" />
                </a>
                <div class="p-5">
                    <a href="{{route('grammer.show', [$grammer->id, str_replace(" ", "-", $grammer->title)])}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$grammer->title}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 line-clamp-5">{{$grammer->description}}</p>
                    <a href="{{route('grammer.show', [$grammer->id, str_replace(" ", "-", $grammer->title)])}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
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