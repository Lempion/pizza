$(document).scroll(function () {
    const targetBlock = $('#trigger');
    const hiddenBlock = $('#main-nav');

    const targetBlockRect = $(targetBlock)[0].getBoundingClientRect();

    if (targetBlockRect.top <= 100) {
        hiddenBlock.removeClass('opacity-0').addClass('opacity-100');
    } else {
        hiddenBlock.removeClass('opacity-100').addClass('opacity-0');
    }
})
