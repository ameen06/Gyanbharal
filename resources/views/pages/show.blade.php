<x-page-layout>

<x-slot:title>
    {{$page->page_title}}
</x-slot:title>

<div class="w-full my-4 lg:my-[8%]">
    <div class="w-full px-4">
        <div class="mt-6 text-base text-gray-800 article">
            {!! $page->page_content !!}
        </div>
    </div>
</div>

</x-page-layout>