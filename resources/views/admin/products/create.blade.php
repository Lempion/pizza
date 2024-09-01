<x-admin-layout>
    @vite('resources/js/product-create.js')
    <x-header title="Product create"/>

    <section class="mt-12 flex space-x-3">
        <div class="w-1/2 h-full">
            <div class="flex justify-between items-center space-x-3">
                <div class="w-1/2">
                    <x-forms.input name="name" label="Name"/>
                </div>
                <div class="w-1/2">
                    <x-forms.select name="category" label="Category" class="selector-size">
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

        <div class="size-product-wrapper w-full h-full relative not-current-category opacity-20 pointer-events-none ">
            <div class="absolute top-0 right-0">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor"
                     class="w-8 h-8 text-orange-500/80 hover:text-orange-500 cursor-pointer">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <x-forms.label name="" label="Sizes product"/>
            <div class="mt-1 w-full max-h-[500px] h-full shadow-md rounded-md overflow-hidden overflow-y-auto custom-scroll">
                <x-table-product-create-size :size-products="$sizeProducts"/>
            </div>
        </div>
    </section>

</x-admin-layout>
