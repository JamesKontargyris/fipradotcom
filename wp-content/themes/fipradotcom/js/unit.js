(function($) {
    $('.about-us-toggle .btn').on('click', function() {
        $('.about-us-toggle').children('.btn').toggleClass('hide');
        $('.about-us-text').children().toggleClass('hide');
        return false;
    })

    if( window.canRunAds === undefined ){
        console.log('Ad Block Detected');
        // adblocker detected, show fallback
        $('.google-map-missing').show();
    } else {
        console.log(window.canRunAds);
    }
})(jQuery);