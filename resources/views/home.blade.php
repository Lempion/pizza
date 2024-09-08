<x-app-layout>
    <div>
        @foreach($productsSections as $productsSection)
            {!! $productsSection !!}
        @endforeach
    </div>

    <input type="hidden" id="old-product-id" value="">
    <input type="hidden" id="route-get-modal-product" value="{{ route('get-modal-product', '') . '/' }}">

    <div class="modal-block"></div>

    @vite('resources/js/product.js')
</x-app-layout>
