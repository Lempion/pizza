@props(['sizeProducts'])

<div class="relative">
    <table class="w-full text-sm text-center text-gray-800 dark:text-gray-400 overflow-x-auto">
        <thead class="text-xs text-gray-900 uppercase bg-orange-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Size
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Gram
                </th>
                <th scope="col" class="py-3 px-6">
                    Default
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-2">
                    <div>
{{--                        <x-forms.select name="size[]" label="">--}}
{{--                            <option selected disabled hidden>Choose category</option>--}}
{{--                            @foreach($sizeProducts as $size)--}}
{{--                                <option value="{{ $size->id }}">{{ $size->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </x-forms.select>--}}
                        0.4 L
                    </div>
                </td>
                <td class="py-2 px-2">
{{--                    <x-forms.input name="price" label=""></x-forms.input>--}}
                    2
                </td>
                <td class="py-2 px-2">
{{--                    <x-forms.input name="gram" label=""></x-forms.input>--}}
                    200
                </td>
                <td class="py-2 px-2">
{{--                    <x-forms.select name="default" label="">--}}
{{--                        <option value="1" selected>True</option>--}}
{{--                        <option value="0">False</option>--}}
{{--                    </x-forms.select>--}}
                    true
                </td>

                <td class="py-2 px-2 space-x-2">
                    <div class="flex w-full justify-between">
                        <x-table-action-wrapper class="bg-orange-400 hover:bg-orange-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-white w-6 h-6">
                                <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                            </svg>
                        </x-table-action-wrapper>

                        <x-table-action-wrapper class="bg-red-500 hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-white w-6 h-6">
                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                            </svg>
                        </x-table-action-wrapper>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-2">
                    <div>
                        <x-forms.select name="size[]" label="">
                            <option selected disabled hidden>Sizes</option>
                            @foreach($sizeProducts as $size)
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                </td>
                <td class="py-2 px-2">
                    <x-forms.input name="price" label=""></x-forms.input>
                </td>
                <td class="py-2 px-2">
                    <x-forms.input name="gram" label=""></x-forms.input>
                </td>
                <td class="py-2 px-2">
                    <x-forms.select name="default" label="">
                        <option value="1">True</option>
                        <option value="0" selected>False</option>
                    </x-forms.select>
                </td>

                <td class="py-2 px-2 space-x-2">
                    <div class="flex w-full justify-between">
                        <x-table-action-wrapper class="bg-green-500/80 hover:bg-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-white w-6 h-6">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/>
                            </svg>
                        </x-table-action-wrapper>
                        <x-table-action-wrapper class="bg-red-500 hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-white w-6 h-6">
                                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"/>
                            </svg>
                        </x-table-action-wrapper>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
