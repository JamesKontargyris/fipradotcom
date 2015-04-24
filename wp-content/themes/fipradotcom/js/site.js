( function() {
    $('.mobile-menu-toggle').on('click', function()
    {
        $('#primary-menu-mobile').slideToggle(200);
        $(this).find('i').toggleClass('fa-bars fa-arrow-up');
    });

    $('.mobile-menu-search').on('click', function()
    {
        $('#mobile-search').slideToggle(200, function()
        {
            $(this).toggleClass('viewable');
            if($(this).hasClass('viewable')) { $(this).find('input[type=text]').focus(); }
        });
    });

//    All internal anchor links slide to position on page
    $("a[href^=#]").click(function(e) { e.preventDefault(); var dest = $(this).attr('href'); $('html,body').animate({ scrollTop: $(dest).offset().top }, 'slow'); });

//    Initialise the Global Network menu on larger screens using the Menuzord plugin
    $("#menuzord").menuzord({effect: 'slide', scrollable: false, showSpeed: 200, hideSpeed: 50});

    $('.global-network-button').on('click', function(e) {
        e.preventDefault();
        ($(this).html() == '<i class="icon-globe"></i> Explore our Global Network') ? $(this).html('<i class="icon-cancel"></i> Close') : $(this).html('<i class="icon-globe"></i> Explore our Global Network');
        $(this).toggleClass('reverse-background');
        $('#header-container').toggleClass('with-border');
       $('#global-network-menu-container').slideToggle(300);
    });
})();