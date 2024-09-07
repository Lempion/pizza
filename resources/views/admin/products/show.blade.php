<!DOCTYPE html>
<html>
<head>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans w-11/12 mx-auto custom-scroll">

    <x-product-modal :product="$product" :show="true"/>
    @vite('resources/js/product.js')
</body>
</html>
