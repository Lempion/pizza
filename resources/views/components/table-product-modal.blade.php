@props(['products'])

<div class="relative">
    <x-input-search-product/>

    <table class="w-full text-sm text-center text-gray-500 overflow-x-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Img
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)

            @endforeach
        </tbody>
    </table>
</div>
