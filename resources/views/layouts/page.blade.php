<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3QKC2PKB3Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3QKC2PKB3Q');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <!-- SEO -->
    <meta name="og:site_name" content="Gyan Bharal">
    {{$seo}}
    <meta name="robots" content="index, follow" />
    <meta name="og:type" content="website" />
    <meta name="og:image" content="https://ik.imagekit.io/3bdrc2hss/gyanbharal-og-image.webp">
    <meta name="og:url" content="https://gyanbharal.in/">
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <link rel="shortcut icon" href="https://ik.imagekit.io/3bdrc2hss/gyanbharal-logo.png" type="image/x-icon">

    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    @stack('styles')
    <script type='text/javascript' src='//pl21896667.toprevenuegate.com/24/bf/8f/24bf8f5ab2a88691a34e453944884c6d.js'></script>
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