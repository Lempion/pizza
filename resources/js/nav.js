$(document).scroll(function () {
    scrollDoc();
})

$('.scroll').on('click', function (e) {
    $('html,body').stop().animate({scrollTop: $(this.hash).offset().top - 100}, 1000);
    e.preventDefault();
});

$(document).ready(function () {
    scrollDoc();

    const sections = $('.products-section');
    const navLinks = $('.scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const id = entry.target.id;
            const navLink = $(`nav a[href="#${id}"]`);

            if (entry.isIntersecting) {
                navLink.addClass('link-active');
            } else {
                navLink.removeClass('link-active');
            }
        });
    }, {threshold: 0.5}); // Настройте порог по необходимости

    sections.each(function () {
        observer.observe(this);
    });
});


function scrollDoc() {
    const targetBlock = $('#trigger');
    const hiddenBlock = $('#main-nav');

    const targetBlockRect = $(targetBlock)[0].getBoundingClientRect();

    if (targetBlockRect.top <= 100) {
        hiddenBlock.addClass('show-nav');
    } else {
        hiddenBlock.removeClass('show-nav');
    }
}
