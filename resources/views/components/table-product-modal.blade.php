@props(['products'])

<div class="h-full flex flex-col">
    <x-input-search-product/>

    <div class="overflow-x-auto custom-scroll">
        <table class="w-full text-sm text-center text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-orange-50 sticky top-0 shadow-md shadow-orange-50 ">
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
                        Add
                    </th>
                </tr>
            </thead>
            <tbody class="text-lg text-gray-900">
                @foreach($products as $product)
                    <tr data-product-id-modal-tr="{{ $product->id }}">
                        <td class="py-2 px-2">
                            <div class="">{{ $product->name }}</div>
                        </td>
                        <td class="py-2 px-2">
                            <div>{{ $product->category->name }}</div>
                        </td>
                        <td class="py-2 px-2 flex justify-center items-center">
                            <div class="w-20 h-20 relative rounded-md overflow-hidden">
                                <img class="absolute w-full h-auto" src="{{ $product->img }}" alt="">
                            </div>
                        </td>
                        <td class="py-2 px-2 size-products-tr">
                            <div class="text-sm font-semibold prices">
                                <ul class="space-y-1">
                                    @foreach($product->sizeProducts as $data)
                                        <li>{{ $data->pivot->price . ' $' }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="sizes hidden">
                                <x-forms.select class="selector-added-size-products" name="selector-size-products" label="">
                                    @foreach($product->sizeProducts as $data)
                                        <option @if($data->pivot->default) selected @endif data-price="{{ $data->pivot->price }}" value="{{ $data->id }}">
                                            {{ $data->name . ' | ' . $data->pivot->price . ' $' }}
                                        </option>
                                    @endforeach
                                </x-forms.select>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="action-product flex items-center justify-center">
                                <x-forms.checkbox class="cursor-pointer modal-select-product" name="modal_select_product" label="" value="{{ $product->id }}"/>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
