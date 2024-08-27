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

    <!-- Фоновый слой модального окна -->
    <div class="product-modal fixed inset-0 bg-gray-500 bg-black bg-opacity-60 flex justify-center items-center z-50">
        <!-- Модальное окно -->
        <div class="bg-white rounded-xl overflow-hidden shadow-xl w-6/12 max-h-[600px] h-full flex">
            <div class="h-full w-1/2 border border-r flex justify-center items-center">
                <img class="w-auto max-h-[350px] h-auto" src="{{ asset('storage/images/icons/pizza.png') }}" alt="">
            </div>
            <div class="h-full w-1/2 border border-l py-4 px-4">
                <div class="space-y-1">
                    <div class="text-3xl font-medium">Name</div>

                    <div class="text-sm font-medium">1 шт, 200г</div>
                    <div class="font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut culpa
                        debitis deleniti explicabo incidunt, iste magni modi necessitatibus, neque, nulla odit pariatur
                        quibusdam quisquam rem sapiente similique soluta vitae?
                    </div>
                    <ul class="items-center border w-full text-sm font-medium text-gray-900 bg-white rounded-xl overflow-hidden">
                        <li class="w-full flex justify-between py-2">
                            <div class="w-1/3 flex flex-col justify-center items-center items-center border-x space-y-1">
                                <input id="pizza-small" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="pizza-small" class="text-sm font-medium text-gray-900 dark:text-gray-300">Small</label>
                            </div>
                            <div class="w-1/3 flex flex-col justify-center items-center items-center border-x space-y-1">
                                <input id="pizza-medium" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="pizza-medium" class="text-sm font-medium text-gray-900 dark:text-gray-300">Medium</label>
                            </div>
                            <div class="w-1/3 flex flex-col justify-center items-center items-center border-x space-y-1">
                                <input id="pizza-hight" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="pizza-hight" class="text-sm font-medium text-gray-900 dark:text-gray-300">Hight</label>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="mt-5 w-full h-auto">
                    <div class="text-2xl font-medium mb-1">Dop</div>
                    <div class="flex flex-wrap overflow-scroll">
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                        <div class="mb-5 w-1/3 h-auto flex flex-col justify-center items-center">
                            <div class="w-10/12 border rounded-md hover:border-orange-500 transition duration-300 ease-in-out cursor-pointer p-1 flex flex-col justify-center items-center">
                                <div class="w-9/12 max-h-[200px] h-auto">
                                    <img class="w-auto h-auto" src="{{ asset('/storage/images/icons/cake.png') }}" alt="">
                                </div>
                                <div class="font-bold text-xl">183$</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/product.js')
</x-app-layout>
