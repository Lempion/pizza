<x-app-layout>
    <div>
        @foreach($productsSections as $productsSection)
            {!! $productsSection !!}
        @endforeach
    </div>

    <input type="hidden" id="old-product-id" value="">
    <input type="hidden" id="route-get-modal-product" value="{{ route('get-modal-product', '') . '/' }}">

    <div class="modal-block fixed inset-0 z-[31] opacity-100 hidde-block transition duration-200 ease-in-out"></div>

    @vite('resources/js/product.js')
</x-app-layout>
