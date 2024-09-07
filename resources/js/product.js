$(document).ready(function () {
    if ($('.product-modal').find('.combo-products-wrapper')){
        recalculateComboPrice();
    }
})

$('.product-card-wrapper').on('click', function (event) {

    if ($(event.target).hasClass('in-card-btn')) {
        return;
    }

    let productModal = $('.product-modal');

    let slug = $(this).data('slug');
    let oldSlug = $('#old-slug').val();

    disableScroll();

    if (slug === oldSlug) {
        $(productModal).removeClass('hidde-block');
        return;
    }

    $(oldSlug).val(slug);
    // $(productModal).empty();

    // $.ajax({
    //     url : '',
    //     method : '',
    //     data : {},
    //     success(answer){
    //         console.log(answer)
    //     },
    //     error(errors){
    //         console.log(errors)
    //     }
    // })

    // $(productModal).append();
    $(productModal).removeClass('hidde-block');
})

$('.product-modal').on('click', function (event) {
    if ($(event.target).hasClass('product-modal')) {
        enableScroll()
        $(this).addClass('hidde-block');
    }
})

$('.additional-product').on('click', function () {
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

function recalculateComboPrice(){
    let oldPrice = 0;
    $('.related-product-card input.price').each(function (){
        console.log(parseInt($(this).val()))
        oldPrice += parseInt($(this).val());
    })

    $('.old-price').text(oldPrice + '$')
    console.log(12)
}
