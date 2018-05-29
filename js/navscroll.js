$(window).on('scroll', function () {
    if ($(this).scrollTop() > 50) {
        if (!$('.navbar').hasClass('expand')) {
            $('.navbar').addClass('expand');
        }
    } else {
        if ($('.navbar').hasClass('expand')) {
            $('.navbar').removeClass('expand');
        }
    }
});
