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

    //Mobile navigation menu sub-menu reveal
    $('#primary-menu-mobile ul > li.menu-item-has-children a').on('click', function(e)
    {
        // If the sub menu ul doesn't have the sub-menu-open class, it is not currently open
        // So open it and close the currently open sub-menu
        // (This also means the top-level link of the currently opened sub-menu will work as a link,
        // rather than a trigger for the sub-menu)
        if(! $(this).next('ul').hasClass('sub-menu-open') && ! $(this).parents('ul').hasClass('sub-menu'))
        {
            e.preventDefault();
            $('ul.sub-menu-open').slideUp().removeClass('sub-menu-open');
            $(this).next('ul').slideDown().addClass('sub-menu-open');
        }
    });
    $('#primary-menu-mobile ul.sub-menu > li.menu-item-has-children > a').on('click', function(e)
    {
        // If the sub menu ul doesn't have the sub-sub-menu-open class, it is not currently open so open it
        // (This also means the top-level link of the currently opened sub-sub-menu will work as a link,
        // rather than a trigger for the sub-menu)
        if(! $(this).next('ul').hasClass('sub-sub-menu-open'))
        {
            e.preventDefault();
            $(this).next('ul.sub-menu').slideToggle().toggleClass('sub-sub-menu-open');
        }
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
    $("a[href^=#]").click(function(e) {
        if($(this).attr('rel') != "modal:open")
        {
            e.preventDefault(); var dest = $(this).attr('href'); $('html,body').animate({ scrollTop: $(dest).offset().top - 20 }, 'slow');
        }
    });

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

//    Set equal heights of content blocks in showcase groups
    $('.showcase.equal-heights .showcase-block-content').matchHeight();

    //    Set equal heights of content blocks in team member groups
    $('.team-group.equal-heights .team-member').matchHeight();

//    Trigger tooltipster for .tooltip classes
    $('.tooltip').tooltipster();

//    Initialise owl carousel and add custom navigation events
    $("#expertise-carousel").owlCarousel();
    $("#public-affairs-services-carousel").owlCarousel({
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
        autoPlay: 5000
    });
    // Custom Navigation Events
    $(".owl-next").click(function(){
        $("#expertise-carousel").trigger('owl.next');
    })
    $(".owl-prev").click(function(){
        $("#expertise-carousel").trigger('owl.prev');
    })

    //Add a fade in/out to modals by default
    $.extend($.modal.defaults, { fadeDuration: 250 });

//    Function: element has attribute?
    $.fn.hasAttr = function(attr) {
        var attribVal = this.attr(attr);
        return (attribVal !== undefined) && (attribVal !== false);
    };
})();