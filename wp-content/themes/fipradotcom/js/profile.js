(function($) {
    $('.contact-form-button').on('click', function() {
        //TODO: integrate Google Analytics tracking https://developers.google.com/analytics/devguides/collection/analyticsjs/events
        $('#contact-form-block').slideDown(300);
        return false;
    });

    $('.contact-form-block-close').on('click', function() {
        $('#contact-form-block').slideUp(300);
        return false;
    })

})(jQuery);