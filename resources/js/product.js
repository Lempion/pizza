$('.product-card-wrapper').on('click', function (){
    let productModal = $('.product-modal');

    let slug = $(this).data('slug');
    let oldSlug = $('#old-slug').val();

    $('body').addClass('overflow-hidden');

    if (slug === oldSlug){
        $(productModal).removeClass('hidden');
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
    $(productModal).removeClass('hidden');
})

$('.product-modal').on('click', function (event){
    if ($(event.target).hasClass('product-modal')){
        $('body').removeClass('overflow-hidden');
        $(this).addClass('hidden');
    }
})
