@props(['name', 'products', 'anchor'])

<div class="products-section" id="{{ $anchor }}">
    <div class="text-left text-4xl font-semibold mb-5">{{ $name }}</div>
    <div class="w-full flex flex-wrap">
        {{--    @foreach($products as $product)--}}

        <x-product-card slug="{{ fake()->unique()->word() }}" price="{{ fake()->numberBetween(5,60) }}" name="{{ ucfirst(fake()->word()) }}" description="{{ fake()->text() }}" src="{{ asset('storage/images/production/coffe.avif') }}"/>
        <x-product-card slug="{{ fake()->unique()->word() }}" price="{{ fake()->numberBetween(5,60) }}" name="{{ ucfirst(fake()->word()) }}" description="{{ fake()->text() }}" src="{{ asset('storage/images/production/coffe.avif') }}"/>
        <x-product-card slug="{{ fake()->unique()->word() }}" price="{{ fake()->numberBetween(5,60) }}" name="{{ ucfirst(fake()->word()) }}" description="{{ fake()->text() }}" src="{{ asset('storage/images/production/coffe.avif') }}"/>
        <x-product-card slug="{{ fake()->unique()->word() }}" price="{{ fake()->numberBetween(5,60) }}" name="{{ ucfirst(fake()->word()) }}" description="{{ fake()->text() }}" src="{{ asset('storage/images/production/coffe.avif') }}"/>
        <x-product-card slug="{{ fake()->unique()->word() }}" price="{{ fake()->numberBetween(5,60) }}" name="{{ ucfirst(fake()->word()) }}" description="{{ fake()->text() }}" src="{{ asset('storage/images/production/coffe.avif') }}"/>
        <x-product-card slug="{{ fake()->unique()->word() }}" price="{{ fake()->numberBetween(5,60) }}" name="{{ ucfirst(fake()->word()) }}" description="{{ fake()->text() }}" src="{{ asset('storage/images/production/coffe.avif') }}"/>

        {{--    @endforeach--}}
    </div>
</div>

