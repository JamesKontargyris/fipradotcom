(function($) {
    $('.about-us-toggle .btn').on('click', function() {
        $('.about-us-toggle').children('.btn').toggleClass('hide');
        $('.about-us-text').children().toggleClass('hide');
        return false;
    })
})(jQuery);