@props(['sizeProducts', 'additionalProducts'])

<div class="absolute top-0 right-0 add-size-product">
    <svg xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 20 20" fill="currentColor"
         class="w-8 h-8 text-orange-500/80 hover:text-orange-500 cursor-pointer">
        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd"/>
    </svg>
</div>
<x-forms.label name="" label="Sizes product"/>
<div class="mt-1 w-full h-[200px] shadow-md rounded-md overflow-hidden overflow-y-auto custom-scroll">
    <x-table-product-create-size :size-products="$sizeProducts"/>
</div>

<x-product-additional-product :additional-products="$additionalProducts"/>
