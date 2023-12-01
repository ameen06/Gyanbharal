<x-page-layout>
@push('styles')
@endpush

<x-slot:title>
    অ - A
</x-slot:title>

<x-slot:seo>
<title>অ - A</title>
<meta name="og:title" content="অ - A">
<meta name="og:description" content="অ - A">
<meta name="description" content="অ - A">
</x-slot:seo>

<div class="w-full mt-4 lg:mt-[8%]">
    {{-- search input --}}
    <div class="w-full px-4">
        <div class="w-full relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="search-words" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Assamese Words" required>
            <button type="submit" id="search-words-btn" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
    </div>
    
    <div class="w-full h-screen mt-6 flex flex-col">
        <h2 class="px-4 font-bold text-lg">Words</h2>
        <table class="w-full mt-2" id="words-table">
            @foreach ($words as $word)  
            <tr class="border-b-2 border-gray-200 font-semibold">
                <td class="w-4/12 pl-4 py-3 break-all capitalize">{{$word->assamese}}</td>
                <td class="px-4 py-3 w-6">:</td>
                <td class="w-full py-3 pl-8 pr-4">
                    <span class="font-bold text-blue-800">{{$word->english}}</span>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@push('scripts')
<script>
jQuery.expr[':'].contains = function(a, i, m) {
  return jQuery(a).text().toUpperCase()
      .indexOf(m[3].toUpperCase()) >= 0;
};

$(document).ready(function() {
    $("#search-words-btn").on("click", function() {
        var word = $('#search-words').val();
        $("#words-table tr").hide();
        $(`#words-table tr:has(td:contains('${word}'))`).each(function() {
            $(this).show();
        });
    });
});
</script>
@endpush
</x-page-layout>