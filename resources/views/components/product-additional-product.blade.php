@props(['additionalProducts'])

<div class="flex justify-start items-center space-x-5 mt-5">
    <x-forms.label name="" label="Additional product"/>
    <x-forms.toggle label="" name="additional-product-toggle"/>
</div>

<div class="w-8/12 hidden mt-1 relative additional-product-wrapper">
    <div class="w-full max-h-[300px] h-full rounded-md overflow-y-auto custom-scroll shadow-md">
        <div class="h-full">
            <table class="w-full text-sm text-center text-gray-800 overflow-x-auto">
                <thead class="text-xs text-gray-900 uppercase bg-orange-50 sticky top-0 z-[20]">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Picture
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Remove
                        </th>
                    </tr>
                </thead>
                <tbody class="added-additional-product"></tbody>
            </table>
        </div>
    </div>

    <div class="absolute right-0 -top-8 add-additional-product">
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 20 20" fill="currentColor"
             class="w-8 h-8 text-orange-500/80 hover:text-orange-500 cursor-pointer">
            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd"/>
        </svg>
    </div>
</div>

<x-product-additional-product-modal :additional_products="$additionalProducts"/>
