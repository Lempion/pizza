<!doctype html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
      x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
      x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @csrf
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/public_function_and_action.js', 'resources/js/toast-functions.js'])
</head>

<body class="custom-scroll">
    <div class="flex bg-white dark:bg-gray-900">
        <x-sidebar class="fixed w-[250px] flex-grow-0 flex-shrink-0"/>
        <div class="w-[250px]"></div>
        <main class="mt-4 px-4 w-9/12 mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
