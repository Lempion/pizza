$(document).ready(function () {

    $(document).on('click', '.add-product-for-combo', function () {
        $('.add-product-for-combo-modal').removeClass('hidde-block');
    }).on('click', '.add-product-for-combo-modal', function (event){
        if ($(event.target).hasClass('add-product-for-combo-modal')) {
            $(this).addClass('hidde-block');
        }
    });
})


