{{-- header --}}
<header class="w-full md:bg-white fixed top-0 left-0 shadow-md z-50">
    <div class="mx-auto max-w-7xl bg-white px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" id="mheader-menu-btn" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 focus:bg-violet-400 focus:text-white focus:outline-none" aria-controls="mheader-mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!--
                Icon when menu is closed.
    
                Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
                Icon when menu is open.
    
                Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
            <div class="flex flex-shrink-0 items-center gap-4">
                {{-- <img class="h-8 w-auto" src="{{ Vite::asset('resources/assets/gyanbharal-logo.png') }}" alt="Gyanbharal"> --}}
                <h1 class="text-lg font-bold text-slate-900">{{$title}}</h1>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <nav class="flex space-x-4">
                    <a href="/" class="px-3 py-2 text-sm font-medium web-nav-active {{ '/' == request()->path() ? 'border-b-2 border-violet-500 text-violet-600 font-bold' : 'text-gray-700 hover:text-violet-500' }}" aria-current="page">Home</a>
                    <a href="/privacy-policy" class="px-3 py-2 text-sm font-medium web-nav-active {{ 'privacy-policy' == request()->path() ? 'border-b-2 border-violet-500 text-violet-600 font-bold' : 'text-gray-700 hover:text-violet-500' }}" aria-current="page">Privacy Policy</a>
                    <a href="/contact-us" class="px-3 py-2 text-sm font-medium web-nav-active {{ 'contact-us' == request()->path() ? 'border-b-2 border-violet-500 text-violet-600 font-bold' : 'text-gray-700 hover:text-violet-500' }}" aria-current="page">Contact Us</a>
                    <button type="button" class="share-btn text-gray-700 hover:text-violet-500 px-3 py-2 text-sm font-medium cursor-pointer">Share</button>
                    <a href="https://play.google.com/store/games?hl=en-IN" target="_blank" class="text-gray-700 hover:text-violet-500 px-3 py-2 text-sm font-medium">Rate Us</a>
                    <a href="https://play.google.com/store/games?hl=en-IN" target="_blank" class="text-gray-700 hover:text-violet-500 px-3 py-2 text-sm font-medium">More Apps</a>
                </nav>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="w-full h-screen bg-black bg-opacity-40 sm:hidden" id="mheader-mobile-menu">
        <nav class="w-full h-full max-w-[70%] bg-white space-y-1 px-2 pb-3 pt-2">
            <a href="/" class="rounded-md px-3 py-2 text-base font-medium {{'/' == request()->path() ? 'bg-violet-800 text-white hover:text-violet-500' : 'text-gray-500 hover:text-white hover:bg-violet-600'}} w-full inline-flex items-center gap-4" aria-current="page">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Home
            </a>
            <a href="/privacy-policy" class="{{ 'privacy-policy' == request()->path() ? 'bg-violet-800 text-white hover:text-violet-500' : 'text-gray-500 hover:text-white hover:bg-violet-600' }} rounded-md px-3 py-2 text-base font-medium w-full inline-flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                Privacy Policy
            </a>
            <a href="/contact-us" class="{{ 'contact-us' == request()->path() ? 'bg-violet-800 text-white hover:text-violet-500' : 'text-gray-500 hover:text-white hover:bg-violet-600' }} rounded-md px-3 py-2 text-base font-medium w-full inline-flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
                Contact Us
            </a>
            <button type="button" class="share-btn text-gray-500 hover:text-white hover:bg-violet-600 rounded-md px-3 py-2 text-base font-medium w-full inline-flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                </svg>
                Share
            </button>
            <a href="https://play.google.com/store/games?hl=en-IN" target="_blank" class="text-gray-500 hover:text-white hover:bg-violet-600 rounded-md px-3 py-2 text-base font-medium w-full inline-flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
                Rate Us
            </a>
            <a href="https://play.google.com/store/games?hl=en-IN" target="_blank" class="text-gray-500 hover:text-white hover:bg-violet-600 rounded-md px-3 py-2 text-base font-medium w-full inline-flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                More Apps
            </a>
        </nav>
    </div>
</header>