<x-admin-layout>
    @vite(['resources/js/product-index.js'])
    <x-header title="Products" />

    <section class="mt-12">
        <x-table-product :products="$products"/>
    </section>

</x-admin-layout>
