@props(['product'])

<div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
    <div class="relative additional-product w-10/12 border rounded-md hover:border-orange-300 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
        <div class="w-9/12 max-h-[200px] h-auto">
            <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
        </div>
        <div class="font-bold text-xl">183$</div>
        <div class="circle transition duration-300 ease-in-out opacity-0 absolute h-4 w-4 block bg-orange-500 top-1 right-1 rounded-full"></div>
    </div>
    <input class="additional-product-input hidden" type="radio" value="id">
</div>
