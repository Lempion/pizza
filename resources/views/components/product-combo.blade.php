@props(['products'])

<input type="hidden" name="size" value="combo">
<input type="hidden" class="combo-price" name="price" value="">
<input type="hidden" name="gram" value="0">
<input type="hidden" name="default" value="1">

<div class="absolute top-0 right-0 add-product-for-combo">
    <svg xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 20 20" fill="currentColor"
         class="w-8 h-8 text-orange-500/80 hover:text-orange-500 cursor-pointer">
        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd"/>
    </svg>
</div>
<x-forms.label name="" label="Products for combo"/>
<div class="mt-1 w-full max-h-[500px] h-full shadow-md rounded-md overflow-hidden overflow-y-auto custom-scroll">
    <x-table-product-combo :products="$products"/>
</div>
