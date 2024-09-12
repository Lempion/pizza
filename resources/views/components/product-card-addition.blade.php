@props(['additionProducts'])

<div class="mt-5 w-full h-auto">
    <div class="text-2xl font-medium mb-2">Additions</div>
    <div class="flex flex-wrap">
        @foreach($additionProducts as $product)
            <x-product-card-addition-card :product="$product"/>
        @endforeach
    </div>
</div>
