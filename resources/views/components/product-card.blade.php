@props(['name', 'description', 'src', 'price', 'productId'])

<div data-product-id="{{$productId}}" class="product-card-wrapper w-3/12 max-h-[460px] h-[460px] px-10 py-5 mb-10 cursor-pointer hover:bg-gray-100 rounded-xl transition duration-300 ease-in-out">
    <div class="w-full h-full rounded-md flex flex-col justify-between items-center">
        <div class="w-full max-h-64 h-auto flex justify-center items-center">
            <img src="{{ $src }}" class="w-auto h-full" alt="">
        </div>
        <div class="flex flex-col justify-between">
            <div class="font-extrabold text-lg py-1">{{ $name }}</div>
            <div class="product-card-description">{{ $description }}</div>
        </div>
        <div class="flex justify-between items-center w-10/12">
            <div class="font-semibold text-xl">${{ $price }}</div>
            <x-in-cart-button/>
        </div>
    </div>
</div>


