{{-- header --}}
<header class="w-full bg-white fixed top-0 left-0 shadow-md z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
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
            <div class="flex flex-shrink-0 items-center">
                {{-- <img class="h-8 w-auto" src="{{ Vite::asset('resources/assets/gyanbharal-logo.png') }}" alt="Gyanbharal"> --}}
                <h1 class="text-lg font-bold text-slate-900">{{$title}}</h1>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <nav class="flex space-x-4">
                    <a href="/" class="px-3 py-2 text-sm font-medium web-nav-active" aria-current="page">Home</a>
                    <a href="#" class="text-gray-700 hover:text-violet-500 px-3 py-2 text-sm font-medium">Share</a>
                </nav>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="w-full sm:hidden" id="mheader-mobile-menu">
        <nav class="w-full space-y-1 px-2 pb-3 pt-2">
        <a href="/" class="block rounded-md px-3 py-2 text-base font-medium mob-nav-active" aria-current="page">Home</a>
        <a href="#" class="text-gray-500 hover:text-white hover:bg-violet-600 rounded-md block px-3 py-2 text-base font-medium">Share</a>
        </nav>
    </div>
</header>