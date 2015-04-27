( function() {
    //Display/hide mobile menu when .mobile-menu-toggle is tapped
    $('.mobile-menu-toggle').on('click', function()
    {
        $('#primary-menu-mobile').slideToggle(200);
        $(this).find('i').toggleClass('fa-bars fa-arrow-up');
    });
    //Display/hide mobile search when .mobile-menu-search is tapped
    $('.mobile-menu-search').on('click', function()
    {
        $('#mobile-search').slideToggle(200, function()
        {
            $(this).toggleClass('viewable');
            if($(this).hasClass('viewable')) { $(this).find('input[type=text]').focus(); }
        });
    });
    //Display/hide mobile Global Network menu when .mobile-menu-global-network is tapped
    $('.mobile-menu-global-network').on('click', function()
    {
        $('#mobile-header-global-network').slideToggle(200);
    });

    $('.search-global-network-button #searchform #s').focus(function()
    {
        /*to make this flexible, I'm storing the current width in an attribute*/
        $(this).attr('data-default', $(this).width());
        $(this).animate({ width: 300 }, 'slow');
    }).blur(function()
    {
        /* lookup the original width */
        var w = $(this).attr('data-default');
        $(this).animate({ width: 150 }, 'slow');
    });

//    All internal anchor links slide to position on page
    $("a[href^=#]").click(function(e) { e.preventDefault(); var dest = $(this).attr('href'); $('html,body').animate({ scrollTop: $(dest).offset().top - 20 }, 'slow'); });

//    Initialise the Global Network menu on larger screens using the Menuzord plugin
    $("#menuzord").menuzord({effect: 'slide', scrollable: false, showSpeed: 200, hideSpeed: 50});

    $('.global-network-button').on('click', function(e) {
        e.preventDefault();
        ($(this).html() == '<i class="icon-globe"></i> Explore our Global Network') ? $(this).html('<i class="icon-cancel"></i> Close') : $(this).html('<i class="icon-globe"></i> Explore our Global Network');
        $(this).toggleClass('reverse-background');
        $('#header-container').toggleClass('with-border');
       $('#global-network-menu-container').slideToggle(300);
    });

//    Anchor links hide/show menu on small screens
    $('.anchor-links-list .menu-title').on('click', function()
    {
        $(this).siblings('li').slideToggle();
    });
})();