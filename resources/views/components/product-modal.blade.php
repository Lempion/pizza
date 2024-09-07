@props(['product', 'show' => false])

<div class="product-modal opacity-100 @if(!$show) hidde-block @endif fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-[31] transition duration-200 ease-in-out">
    <div class="bg-white rounded-xl overflow-hidden shadow-xl w-6/12 max-h-[700px] h-full flex">
        <div class="h-full w-1/2 border border-r flex justify-center items-center">
            <img class="w-auto max-h-[350px] h-auto" src="{{ $product->img }}" alt="">
        </div>
        <div class="h-full w-1/2 border border-l">
            <div class="h-[90%] overflow-y-auto custom-scroll py-4 px-4 flex flex-col">
                <x-product-card-info :product="$product"/>

                <x-product-card-setting :product="$product"/>

                @if($product->category->slug === \App\Enums\CategoryEnum::Combo->value)
                    <x-product-card-combo-products :related_products="$product->relatedProducts"/>
                @else
                    <x-product-card-addition addition_products="-"/>
                @endif

            </div>
            <div class="h-[10%] w-full flex justify-center items-center shadow-inner">
                <div class="w-4/12 flex space-x-1">
                    @if($product->category->slug === \App\Enums\CategoryEnum::Combo->value)
                        <p class="text-2xl font-semibold text-orange-500 ml-2 new-price">{{ $product->sizeProducts->first()->pivot->price }}$</p>
                        <p class="text-sm opacity-70 line-through decoration-orange-500 old-price"></p>
                    @endif
                </div>
                <div class="h-[60%] w-4/12">
                    <x-in-cart-button/>
                </div>
                <div class="w-4/12"></div>
            </div>
        </div>
    </div>
</div>
