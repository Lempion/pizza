@props(['name', 'products', 'anchor'])

<div class="products-section" id="{{ $anchor }}">
    <div class="text-left text-4xl font-semibold mb-5">{{ $name }}</div>
    <div class="w-full flex flex-wrap">
        @foreach($products as $product)
            <x-product-card product-id="{{ $product->id }}" price="{{ $product->sizeProducts->firstWhere('pivot.default', 1)->pivot->price }}" name="{{ $product->name }}" description="{{ $product->description }}" src="{{ $product->img }}"/>
        @endforeach
    </div>
</div>

