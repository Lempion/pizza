@props(['products'])

<div class="add-product-for-combo-modal opacity-100 hidde-block fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-[31] transition duration-200 ease-in-out">
    <div class="w-8/12 max-h-[600px] h-full bg-white rounded-xl shadow-md py-2 px-2">
        <x-table-product-modal :products="$products"/>
    </div>
</div>
