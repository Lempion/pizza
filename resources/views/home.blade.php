<x-app-layout>
    <div>
        <x-products-section anchor="breakfast" name="Breakfast" products="[]"/>
        <x-products-section anchor="pizza" name="Pizza" products="[]"/>
        <x-products-section anchor="combo" name="Combo" products="[]"/>
        <x-products-section anchor="snacks" name="Snacks" products="[]"/>
        <x-products-section anchor="cocktails" name="Cocktails" products="[]"/>
        <x-products-section anchor="coffee" name="Coffee" products="[]"/>
        <x-products-section anchor="drinks" name="Drinks" products="[]"/>
        <x-products-section anchor="desserts" name="Desserts" products="[]"/>
    </div>

    <input type="hidden" id="old-slug" value="">

    <x-product-modal product="-"/>

    @vite('resources/js/product.js')
</x-app-layout>
