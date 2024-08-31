<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans w-full h-full mx-auto">

    <div class="w-full flex custom-scroll">
        <div class="w-2/12 h-screen bg-orange-500 overflow-y-auto custom-scroll">
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
            <div class="w-full h-20 bg-orange-100 mb-5"> 12</div>
        </div>

        <main class="main-wrapper w-10/12 h-screen bg-orange-300 overflow-y-auto custom-scroll">
            145
            {{ $slot }}
        </main>
    </div>

</body>
</html>
