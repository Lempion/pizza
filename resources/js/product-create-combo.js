$(document).ready(function () {

    $(document).on('click', '.add-product-for-combo', function () {
        $('.add-product-for-combo-modal').removeClass('hidde-block');
    }).on('click', '.add-product-for-combo-modal', function (event) {
        if ($(event.target).hasClass('add-product-for-combo-modal')) {
            $(this).addClass('hidde-block');
        }
    }).on('click', '.remove-added-product', function () {
        $('.added-product[data-product-id-modal-tr="' + $(this).attr('data-product-id') + '"]').remove();
        $('.modal-select-product[value="' + $(this).attr('data-product-id') + '"]').prop('checked', false);
        recalculatePrice();
    }).on('change', '.selector-added-size-products', function () {
        recalculatePrice();
    });

    window.recalculatePrice = function () {
        let totalPrice = 0;
        $('.added-product-tbody .selector-added-size-products').each(function () {
            totalPrice += parseFloat($(this).find('option[value="' + $(this).val() + '"]').attr('data-price'));
        });

        $('.total-price-added-products').text(totalPrice == 0 ? 'No products selected' : totalPrice + ' $')
    }
})


