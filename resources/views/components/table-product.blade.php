@props(['products'])

<div class="flex space-x-2 items-center">
    <div class="bg-white dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" id="table-search"
                   class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Search for items">
        </div>
    </div>

    <a href="{{ route('products.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 20 20" fill="currentColor"
                 class="w-10 h-10 text-orange-500/80 hover:text-orange-500 cursor-pointer">
            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd"/>
        </svg>
        </a>
</div>

<div class="relative shadow-md my-3">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-x-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-2">
                    Category
                </th>
                <th scope="col" class="py-3 px-2">
                    In stock
                </th>
                <th scope="col" class="py-3 px-5">
                    Price
                </th>
                <th scope="col" class="py-3 px-2">
                    Active
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="!text-lg text-center">
            @foreach($products as $product)
                <tr class="shadow-md hover:bg-gray-200 @if($loop->even) bg-gray-100 @else bg-white @endif">
                    <td class="py-2 px-2">
                        <div class="">{{ $product->name }}</div>
                    </td>
                    <td class="py-2 px-2">
                        <div class="">{{ $product->category->name }}</div>
                    </td>
                    <td class="py-2 px-2">
                        <div class="">{{ $product->in_stock }}</div>
                    </td>
                    <td class="py-2 px-2">
                        <div class="flex items-center justify-center">
                            <ul class="text-sm font-semibold w-8/12 text-left">
                                @foreach($product->sizeProducts as $data)
                                    <li class="relative flex">
                                        <div class="w-1/2">
                                            {{ $data->name}}
                                        </div>
                                        <div class="">
                                            {{ $data->pivot->price . ' $' }}
                                        </div>
                                        @if($data->pivot->default)
                                            <div class="absolute -left-3 top-1/2 transform -translate-y-1/2 w-2 h-2 bg-orange-500 rounded-full"></div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </td>
                    <td class="py-2 px-2">
                        <div class="flex items-center justify-center">
                            <div class="w-6 h-6 shadow-md rounded-full @if($product->active) bg-green-500 shadow-green-200 @else bg-red-500 shadow-red-200 @endif"></div>
                        </div>
                    </td>
                    <td class="py-2 px-2">
                        <div class="flex items-center justify-center">
                            <div class="relative action-menu-wrapper">
                                <svg class="w-5 h-5 button-action-menu cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                                <!-- Dropdown menu -->
                                <div class="action-menu absolute hidden z-10 transform -translate-y-1/2 left-8 border border-gray-200 bg-white divide-y divide-gray-100 rounded-lg shadow w-32">
                                    <ul class="py-2 text-sm text-gray-700 text-left font-semibold">
                                        <li class="">
                                            <a href="{{ route('products.show', $product->id) }}" target="_blank" class="flex block space-x-3 px-4 py-2 hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-blue-500">
                                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                                <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd"/>
                                            </svg>
                                            <p>Show</p>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="flex block space-x-3 px-4 py-2 hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-orange-400">
                                                <path d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z"/>
                                            </svg>
                                            <p>Edit</p>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="flex block space-x-3 px-4 py-2 hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-red-500">
                                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd"/>
                                            </svg>
                                            <p>Delete</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="w-full flex justify-center items-center">
    {{ $products->links() }}
</div>
