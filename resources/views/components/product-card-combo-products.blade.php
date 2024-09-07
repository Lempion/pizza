@props(['related_products'])

<div class="mt-5 w-full h-auto combo-products-wrapper">
    <div class="text-2xl font-medium mb-2">Products</div>

    <div class="w-full space-y-3">
        @foreach($related_products as $product)
            @php
                $sizeProduct = $product->sizeProducts->firstWhere('id', $product->pivot->size_product_id);
            @endphp
            <div class="related-product-card cursor-default w-full border border-orange-500 rounded-md flex py-3 px-4 space-x-5 shadow-md shadow-orange-500/30 hover:shadow-orange-500/50 transition ease-in-out duration-300">
                <div class="w-2/12 ">
                    <img class="rounded-md" src="{{ $product->img }}" alt="">
                </div>

                <div class="w-10/12 space-y-2">
                    <div>
                        <div class="text-xl font-semibold">{{ $product->name }}</div>
                        <div class="text-sm flex space-x-1">
                            <p>{{ $sizeProduct->name }}</p>
                            ,
                            <p>{{ $sizeProduct->pivot->gram  . 'g'}}</p>
                        </div>
                    </div>

                    <div class="text-sm font-normal">
                        {{ $product->description }}
                    </div>
                </div>
                <input class="price" type="hidden" value="{{ $sizeProduct->pivot->price }}">
            </div>
        @endforeach
    </div>
</div>
