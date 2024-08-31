@props(['product'])

<div class="product-modal opacity-100 hidde-block fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-[31] transition duration-200 ease-in-out">
    <div class="bg-white rounded-xl overflow-hidden shadow-xl w-6/12 max-h-[700px] h-full flex">
        <div class="h-full w-1/2 border border-r flex justify-center items-center">
            <img class="w-auto max-h-[350px] h-auto" src="{{ asset('storage/images/icons/pizza.png') }}" alt="">
        </div>
        <div class="h-full w-1/2 border border-l">
            <div class="h-[90%] overflow-y-auto custom-scroll py-4 px-4 flex flex-col justify-between">
                <x-product-card-info product="-"/>

                <x-product-card-setting product="-"/>

                <x-product-card-addition addition_products="-"/>
            </div>
            <div class="h-[10%] w-full flex justify-center items-center shadow-inner">
                <div class="h-[60%] w-6/12">
                    <x-in-cart-button/>
                </div>
            </div>
        </div>
    </div>
</div>
