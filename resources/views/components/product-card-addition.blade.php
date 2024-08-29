@props(['addition_products'])

<div class="mt-5 w-full h-auto">
    <div class="text-2xl font-medium mb-2">Additions</div>
    <div class="flex flex-wrap">
        {{--        @foreach($addition_products as $product)--}}
        {{--            <x-product-card-addition-card product="{{ $product }}"/>--}}
        {{--        @endforeach--}}

        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
        <x-product-card-addition-card product="-"/>
    </div>
</div>
