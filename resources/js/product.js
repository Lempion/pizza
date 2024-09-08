let routeGetModalProduct = $('#route-get-modal-product').val();

$(document).on('click', '.product-card-wrapper', function (event) {

    if ($(event.target).hasClass('in-card-btn')) {
        return;
    }

    let modalBlock = $('.modal-block');

    let productId = $(this).attr('data-product-id');
    let oldProductId = $('#old-product-id').val();

    disableScroll();

    if (productId === oldProductId) {
        $(modalBlock).removeClass('hidde-block');
        return;
    }

    $(oldProductId).val(productId);
    $(modalBlock).empty();

    $.ajax({
        url: routeGetModalProduct + productId,
        method: 'GET',
        success(answer) {
            $(modalBlock).append(answer);
            if ($('.product-modal').find('.combo-products-wrapper')) {
                recalculateComboPrice();
            }
        },
        error(errors) {
            console.log(errors)
        }
    })
    $(modalBlock).removeClass('hidde-block');
}).on('click', '.product-modal', function (event) {
    if ($(event.target).hasClass('product-modal')) {
        enableScroll()
        $(this).addClass('hidde-block');
    }
}).on('click', '.additional-product', function () {
    if ($(this).hasClass('active-additional-product')) {
        $(this).removeClass('active-additional-product');
        $(this).find('.circle').removeClass('opacity-100')
    } else {
        $(this).addClass('active-additional-product');
        $(this).find('.circle').addClass('opacity-100');
    }
})

function disableScroll() {
    $('body').addClass('overflow-hidden pr-scroll');
    $('#main-nav').addClass('pr-scroll');
}

function enableScroll() {
    $('body').removeClass('overflow-hidden pr-scroll');
    $('#main-nav').removeClass('pr-scroll');
}

function recalculateComboPrice() {
    let oldPrice = 0;
    $('.related-product-card input.price').each(function () {
        oldPrice += parseInt($(this).val());
    })

    $('.old-price').text(oldPrice + '$')
}
