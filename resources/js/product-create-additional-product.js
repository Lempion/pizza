let removeAction = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="remove-added-additional-product cursor-pointer w-10 h-10 text-orange-500/90 hover:text-orange-500">\n' +
    '                                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />\n' +
    '                            </svg>';

$(document).ready(function () {

    $(document).on('change', '#additional-product-toggle', function () {
        if ($(this).is(':checked')) {
            $('.additional-product-wrapper').removeClass('hidden');
        } else {
            $('.additional-product-wrapper').addClass('hidden');
        }
    }).on('click', '.add-additional-product', function () {
        $('.add-additional-product-modal').removeClass('hidde-block');
    }).on('click', '.add-additional-product-modal', function (event) {
        if ($(event.target).hasClass('add-additional-product-modal')) {
            $(this).addClass('hidde-block');
        }
    }).on('click', '.modal-select-additional-product', function () {
        if ($(this).is(':checked')) {
            let addedTr = $('.additional-product-tbody tr[data-additional-product-id-modal-tr="' + $(this).val() + '"]');
            addedTr.parent().prepend(addedTr);

            addedTr = addedTr.clone();

            addedTr.find('.action-additional-product').empty().append($(removeAction).attr('data-additional-product-id', $(this).val()));

            $('.added-additional-product').append(addedTr);
        } else {
            $('.remove-added-additional-product[data-additional-product-id="' + $(this).val() + '"]').click();
        }
    }).on('click', '.remove-added-additional-product', function () {
        let additionalProductId = $(this).attr('data-additional-product-id');
        let lastCheckedElem = $('.modal-select-additional-product:checked').last();

        if (lastCheckedElem){
            $('.additional-product-tbody tr[data-additional-product-id-modal-tr="' + lastCheckedElem.val() + '"]').after(
                $('.additional-product-tbody tr[data-additional-product-id-modal-tr="' + additionalProductId + '"]')
            );
        }

        $('.modal-select-additional-product[value="' + additionalProductId + '"]').prop('checked', false);
        $('.added-additional-product tr[data-additional-product-id-modal-tr="' + additionalProductId + '"]').remove();
    })

})
