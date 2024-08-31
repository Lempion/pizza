<x-admin-layout>
    <x-header title="Product create"/>

    <section class="mt-12 flex space-x-3">
        <div class="w-1/2 h-full">
            <div class="flex justify-between items-center space-x-3">
                <div class="w-1/2">
                    <x-forms.input name="name" label="Name"/>
                </div>
                <div class="w-1/2">
                    <x-forms.select name="category" label="Category">
                        <option selected disabled hidden>Choose category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->slug }}">{{ $category->name }}</option>
                        @endforeach
                    </x-forms.select>
                </div>
            </div>

            <x-forms.textarea name="description" label="Description"/>

            <div class="flex justify-between items-center space-x-3">
                <div class="w-1/3">
                    <x-forms.input name="in_stock" label="In stock"/>
                </div>
                <div class="w-2/3">
                    <x-forms.file name="picture" label="Picture"/>
                </div>
            </div>

        </div>
        <div class="w-1/2 max-h-[500px] h-full shadow-md rounded-md overflow-hidden overflow-y-auto custom-scroll">
            <x-table-product-create-size :size-products="$sizeProducts"/>
        </div>
    </section>

</x-admin-layout>