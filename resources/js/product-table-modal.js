let removeAction = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="remove-added-product cursor-pointer w-10 h-10 text-orange-500/90 hover:text-orange-500">\n' +
    '                                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />\n' +
    '                            </svg>';

$('.modal-select-product').on('click', function (){
    let productId = $(this).val();
    if ($(this).is(':checked')){
        let trModal = $('tr[data-product-id-modal-tr="' + productId + '"]');
        trModal.parent().prepend(trModal);

        trModal = trModal.clone().addClass('added-product');
        trModal.find('.size-products-tr .prices').addClass('hidden');
        trModal.find('.size-products-tr .sizes').removeClass('hidden');
        trModal.find('.action-product').empty().append($(removeAction).attr('data-product-id', productId));
        $('.added-product-tbody').append(trModal);
    }else {
        $('.added-product[data-product-id-modal-tr="' + productId + '"]').remove();
    }
    recalculatePrice();
})
