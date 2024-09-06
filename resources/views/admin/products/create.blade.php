<x-admin-layout>
    @vite(['resources/js/product-create.js', 'resources/js/product-create-combo.js', 'resources/js/product-table-modal.js', 'resources/js/product-store.js'])
    <x-header title="Product create"/>

    <section class="mt-12 flex space-x-3">
        <div class="info-wrapper w-1/2 h-full space-y-3">
            <div class="flex justify-between items-center space-x-3">
                <div class="w-1/2">
                    <x-forms.input name="name" label="Name" class="product-input"/>
                </div>
                <div class="w-1/2">
                    <x-forms.select name="category" label="Category" class="selector-category">
                        <option selected disabled hidden value="0">Choose category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->slug }}">{{ $category->name }}</option>
                        @endforeach
                    </x-forms.select>
                </div>
            </div>

            <x-forms.textarea name="description" label="Description" class="product-input"/>

            <div class="flex justify-between items-center space-x-3">
                <div class="w-1/3">
                    <x-forms.input name="in_stock" label="In stock" class="product-input only-nums text-center"/>
                </div>
                <div class="w-2/3">
                    <x-forms.file name="product-img" label="Picture" class="product-input product-img" accept="image/*"/>
                </div>
            </div>

            <div class="w-full flex items-center justify-center">
                <div class="w-[60%] h-full border border-orange-500 rounded-xl overflow-hidden">
                    <img class="w-auto h-full product-img" alt="">
                    <input type="hidden" id="current_img_path">
                </div>
            </div>
        </div>

        <input type="hidden" class="routeGetTable" value="{{ route('get-current-table-for-create-product', '') . '/' }}">
        <input type="hidden" class="routeUploadProductImg" value="{{ route('upload-product-img') }}">
        <input type="hidden" class="srcImage" value="{{ asset('') }}">
        <input type="hidden" class="routeProductStore" value="{{ route('products.store') }}">
        <input type="hidden" class="routeComboStore" value="{{ route('products.store-combo') }}">

        <div class="table-wrapper w-full h-full relative"></div>

        <div class="store-product fixed bottom-16 right-16 w-20 h-20 bg-orange-500/90 rounded-full shadow-md hover:cursor-pointer hover:bg-orange-500 flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-16 h-16 text-white">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/>
            </svg>
        </div>
    </section>

</x-admin-layout>
