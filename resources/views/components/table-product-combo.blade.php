@props(['products'])

<x-product-product-for-combo-modal :products="$products"/>

<div class="relative">
    <table class="w-full text-sm text-center text-gray-800 dark:text-gray-400 overflow-x-auto">
        <thead class="text-xs text-gray-900 uppercase bg-orange-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
            <tr>
                <th scope="col" class="py-3 px-6 w-1/12">
                    Name
                </th>
                <th scope="col" class="py-3 px-6 w-1/12">
                    Category
                </th>
                <th scope="col" class="py-3 px-6 w-1/12">
                    Img
                </th>
                <th scope="col" class="py-3 px-6 w-1/12">
                    Size
                </th>
                <th scope="col" class="py-3 px-6 w-1/12">
                    Remove
                </th>
            </tr>
        </thead>
        <tbody class="added-product-tbody"></tbody>
    </table>
</div>
