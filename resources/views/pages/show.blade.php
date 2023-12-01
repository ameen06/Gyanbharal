<x-page-layout>

<x-slot:title>
    {{$page->page_title}}
</x-slot:title>

<x-slot:seo>
    <title>{{$page->page_title}} | Create Some Creative</title>
    <meta name="og:title" content=" {{$page->page_title}} | Create Some Creative">
    <meta name="og:description" content="{{$page->page_title}} | Design a New Page to Create Something new">
    <meta name="description" content="{{$page->page_title}} | Design a New Page to Create Something new">
</x-slot:seo>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <div class="mt-6 text-base text-gray-800 article">
            {!! $page->page_content !!}
        </div>
    </div>
</div>

</x-page-layout>