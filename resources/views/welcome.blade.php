<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased bg-gradient-to-tr from-amber-100 to-amber-50">
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
                    <h1 class="text-lg font-bold text-slate-900">Gyanbharal</h1>
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

    {{-- categories --}}
    <section class="w-full max-w-2xl mx-auto h-screen pt-24 pb-8 px-4 overflow-auto">
        <div class="w-full h-full flex justify-center items-center">
            <div class="w-full grid grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="{{route('e-a-words')}}" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-orange-600">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-orange-400 group-hover:bg-orange-600">
                            <h2 class="text-base font-semibold text-gray-900">A - অ</h2>
                        </div>
                    </div>
                </a>

                <a href="{{route('a-e-words')}}" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-lime-600">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-lime-400 group-hover:bg-lime-600">
                            <h2 class="text-base font-semibold text-gray-900">অ - A</h2>
                        </div>
                    </div>
                </a>

                <a href="{{route('kids-playstream')}}" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-green-600">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-green-400 group-hover:bg-green-600">
                            <h2 class="text-base font-semibold text-gray-900">Kids</h2>
                        </div>
                    </div>
                </a>

                <a href="{{route('daily-facts')}}" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-yellow-600">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-yellow-400 group-hover:bg-yellow-600">
                            <h2 class="text-base font-semibold text-gray-900">Daily Facts</h2>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-rose-600">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-rose-400 group-hover:bg-rose-600">
                            <h2 class="text-base font-semibold text-gray-900">Quiz</h2>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-cyan-600">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-cyan-400 group-hover:bg-cyan-600">
                            <h2 class="text-base font-semibold text-gray-900">Essay</h2>
                        </div>
                    </div>
                </a>

                <a href="{{route('phrases.index')}}" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-purple-600">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-purple-400 group-hover:bg-purple-600">
                            <h2 class="text-base font-semibold text-gray-900">Phrases</h2>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full h-fit group">
                    <div class="w-full bg-white pt-4 text-center rounded-md shadow-2xl shadow-amber-100 overflow-hidden group-hover:shadow-sky-300">
                        <img src="https://img.freepik.com/free-vector/english-alphabets-many-colors_1308-4763.jpg" alt="Letters" class="w-20 mx-auto">

                        <div class="w-full px-4 py-2 mt-4 bg-sky-400 group-hover:bg-sky-600">
                            <h2 class="text-base font-semibold text-gray-900">Grammer</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script>
        $('#mheader-mobile-menu').hide();

        $(document).ready(function(){
            // mobile header menu
            $('#mheader-menu-btn').on('click', function(){
                console.log('clickede');
                $('#mheader-mobile-menu').toggle();
            });
        });
    </script>
</body>
</html>
