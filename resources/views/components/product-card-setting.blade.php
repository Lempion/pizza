@props(['product'])

@php
    $sizeProducts = $product->sizeProducts;
@endphp

@if($sizeProducts->count() > 1 && $product->category->slug !== \App\Enums\CategoryEnum::Combo->value)
    <div class="mt-5">
        <ul class="items-center border w-full font-medium text-lg text-gray-900 bg-white rounded-xl overflow-hidden">
            <li class="w-full flex justify-between py-2">
                @foreach($sizeProducts as $sizeProduct)
                    <div class="w-1/3 flex flex-col justify-center items-center items-center border-x space-y-1">
                        <input
                            id="pizza-small"
                            type="radio"
                            value="{{ $sizeProduct->id }}"
                            name="list-radio"
                            data-price="{{ $sizeProduct->pivot->price }}"
                            data-gram="{{ $sizeProduct->pivot->gram }}"
                            class="cursor-pointer w-5 h-5 text-orange-500 group-hover:bg-orange-300 hover:bg-orange-400 focus:ring-0 border-orange-500"
                            @if($sizeProduct->pivot->default) checked @endif >
                        <label for="pizza-small" class="group cursor-pointer">{{ $sizeProduct->name }}</label>
                    </div>
                @endforeach
            </li>
        </ul>
    </div>
@endif

