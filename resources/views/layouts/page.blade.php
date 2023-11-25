<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ $title }}</title>

    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    
</head>
<body class="font-sans antialiased">
    <x-header>
        <x-slot:title>
            {{ $title }}
        </x-slot:title>
    </x-header>

    <main class="w-full max-w-2xl mx-auto pt-16">
        <div class="w-full h-full flex flex-col justify-center items-center">
            {{ $slot }}
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $('#mheader-mobile-menu').hide();

        $(document).ready(function(){
            // mobile header menu
            $('#mheader-menu-btn').on('click', function(){
                $('#mheader-mobile-menu').toggle();
            });
        });

        // page share
        const shareData = {
            title: "Gyanbharal",
            url: "https://gyanbharal.com",
        };

        $('.share-btn').on("click", async () => {
            await navigator.share(shareData);
        });
    </script>
    @stack('scripts')
</body>
</html>