@props(['additionalProducts'])

<div class="add-additional-product-modal opacity-100 hidde-block fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-[31] transition duration-200 ease-in-out">
    <div class="w-8/12 max-h-[600px] h-full bg-white rounded-xl shadow-md py-2 px-2">
        <div class="h-full flex flex-col">
            <x-input-search-product/>

            <div class="overflow-x-auto custom-scroll">
                <table class="w-full text-sm text-center text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-orange-50 sticky top-0 z-[31] shadow-md shadow-orange-50">
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
                                Add
                            </th>
                        </tr>
                    </thead>
                    <tbody class="additional-product-tbody text-lg text-gray-900">
                        @foreach($additionalProducts as $additionalProduct)
                            <tr data-additional-product-id-modal-tr="{{ $additionalProduct->id }}">
                                <td class="py-2 px-2">
                                    <div class="">{{ $additionalProduct->name }}</div>
                                </td>
                                <td class="py-2 px-2 flex justify-center items-center">
                                    <div class="w-14 h-14 relative rounded-md overflow-hidden">
                                        <img class="absolute w-full h-auto" src="{{ $additionalProduct->img }}" alt="">
                                    </div>
                                </td>
                                <td class="py-2 px-2">
                                    <div>{{ $additionalProduct->price }}</div>
                                </td>
                                <td class="py-2 px-2">
                                    <div class="action-additional-product flex items-center justify-center">
                                        <x-forms.checkbox class="cursor-pointer modal-select-additional-product" name="modal-select-additional-product" label="" value="{{ $additionalProduct->id }}"/>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
