@props(['product'])

<div class="space-y-1">
    <div class="text-3xl font-medium">{{ $product->name }}</div>

    @if($product->category->slug !== \App\Enums\CategoryEnum::Combo->value)
        <div class="text-sm font-medium flex space-x-2">
            @php
                $defaultSizeProduct = $product->sizeProducts->collect()->firstWhere(function ($elem){
                    return $elem->pivot->default == true;
            });
            @endphp
            <p class="quantity">{{ $defaultSizeProduct->name }}</p>
            ,
            <p class="gram">{{ $defaultSizeProduct->pivot->gram . 'g' }}</p>
        </div>
    @endif
    <div class="text-lg font-medium">{{ $product->description }}</div>
</div>
