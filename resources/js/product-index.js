$('.button-action-menu').hover(function () {
    $('.action-menu').addClass('hidden');

    $(this).parent().find('.action-menu').removeClass('hidden');
})

$('tr').on('mouseleave', function () {
    $('.action-menu').addClass('hidden');
});
