(function($) {
    //    Function: element has attribute?
    $.fn.hasAttr = function(attr) {
        var attribVal = this.attr(attr);
        return (attribVal !== undefined) && (attribVal !== false);
    };
    // Make all elements selected the same width (i.e. scale to size of the widest element)
    $.fn.matchWidths = function() {
        var widest = 0;
        $(this).css('width', 'auto');
        $(this).each(function () { widest = Math.max(widest, $(this).outerWidth()); }).width(widest);
    }

    $.fn.extend({
        sizeToHighestElement: function(elem) {
            // Size elements to height of longest element in each parent
            $.each(this, function()
            {
                // Get an array of all element heights
                var elementHeights = $(elem).map(function() {
                    return $(this).actual('outerHeight');
                }).get();

                // Math.max takes a variable number of arguments
                // `apply` is equivalent to passing each height as an argument
                var maxHeight = Math.max.apply(null, elementHeights);

                // Set each height to the max height
                $(elem).height(maxHeight);

            });
            return true;
        }
    });

    jQuery.fn.animateAuto = function(prop, speed, callback){
        var elem, height, width;
        return this.each(function(i, el){
            el = jQuery(el), elem = el.clone().css({"height":"auto","width":"auto"}).appendTo("body");
            height = elem.css("height"),
                width = elem.css("width"),
                elem.remove();

            if(prop === "height")
                el.animate({"height":height}, speed, callback);
            else if(prop === "width")
                el.animate({"width":width}, speed, callback);
            else if(prop === "both")
                el.animate({"width":width,"height":height}, speed, callback);
        });
    }

    //Lazy loading of elements
    $('.lazy').Lazy();

    //Remove the outer .textwidget div on text widgets
    // $('.textwidget').replaceWith($('.textwidget').contents());

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
        $(this).animate({ width: 400 }, 'slow');
    }).blur(function()
    {
        /* lookup the original width */
        var w = $(this).attr('data-default');
        $(this).animate({ width: 200 }, 'slow');
    });

//    All internal anchor links slide to position on page
    $(".jump-to-link").click(function(e) {
        if($(this).attr('rel') != "modal:open")
        {
            e.preventDefault(); var dest = $(this).attr('href'); $('html,body').animate({ scrollTop: $(dest).offset().top - 80 }, 'slow');
        }
    });

//    Initialise the Global Network menu on larger screens using the Menuzord plugin
    $("#menuzord").menuzord({effect: 'slide', scrollable: false, showSpeed: 200, hideSpeed: 50});

    $('.global-network-button').on('click', function(e) {
        e.preventDefault();
        ($(this).html() == '<i class="icon-globe"></i> Explore our Network') ? $(this).html('<i class="icon-cancel"></i> Close') : $(this).html('<i class="icon-globe"></i> Explore our Network');
        $(this).toggleClass('reverse-background');
        $('#header-container').toggleClass('with-border');
       $('#global-network-menu-container').slideToggle(300);
    });


//    Trigger tooltipster for .tooltip classes
    $('.tooltip').tooltipster();

//    Initialise owl carousel and add custom navigation events
    $(".testimonial-group").owlCarousel({
        singleItem:true,
        slideSpeed: 500,
        paginationSpeed: 500,
        rewindSpeed: 500,
        autoPlay: 5000,
        //transitionStyle: "fade",
        pagination: false
    });
    $("#public-affairs-services-carousel").owlCarousel({
        singleItem:true,
        autoPlay: 5000,
        navigation:true,
        navigationText: ['<i class="icon-left-open-2"></i>', '<i class="icon-right-open-2"></i>']
    });
    $("#home-hero-carousel").owlCarousel({
        singleItem:true,
        autoPlay: 8000,
        transitionStyle: "fade",
        pagination:true
    });

    //Get number of items in team-carousel and work out how many to display in the carousel
    var numberOfItems = $('.team-carousel').data('number-of-items');
    $(".team-carousel").owlCarousel({
        itemsCustom: [[0,1], [480,(numberOfItems < 2) ? numberOfItems : 2], [768,(numberOfItems < 3) ? numberOfItems : 3], [940, (numberOfItems < 4) ? numberOfItems : 4], [1300, (numberOfItems < 5) ? numberOfItems : 5]],
        navigation:true,
        navigationText: ['<i class="icon-left-open-2"></i>', '<i class="icon-right-open-2"></i>']

    });

    //Get number of items in expertise-carousel and work out how many to display in the carousel
    var numberOfItems = $('#expertise-carousel').data('number-of-items');
    $("#expertise-carousel").owlCarousel({
        //items: 4,
        itemsCustom: [[0,1], [480,(numberOfItems < 2) ? numberOfItems : 2], [768,(numberOfItems < 3) ? numberOfItems : 3], [940, (numberOfItems < 4) ? numberOfItems : 4], [1300, (numberOfItems < 4) ? numberOfItems : 4]],
        navigation:true,
        navigationText: ['<i class="icon-left-open-2"></i>', '<i class="icon-right-open-2"></i>']
    });

    // Custom Navigation Events
    $(".owl-next").click(function(){
        $($(this).data('carousel')).trigger('owl.next');
    })
    $(".owl-prev").click(function(){
        $($(this).data('carousel')).trigger('owl.prev');
    })

    //Add a fade in/out to modals by default
    $.extend($.modal.defaults, { fadeDuration: 250, zIndex:20 });

    //Make title and blurb section of homepage hero banner the same on all slides
    //then add some margin
    $('.home-hero-title-and-blurb').matchHeight().css('margin-bottom', '24px');

    $(window).resize(function()
    {
        //    Set equal heights of content blocks in showcase groups
        $('.showcase.equal-heights .showcase-block-content').matchHeight();

        //    Set equal heights of content blocks in team member groups
        $('.team-group.equal-heights .team-member').matchHeight();

        //    Set equal heights of content blocks in expertise carousel groups
        $('.expertise-area-name').matchHeight();

        //    Set equal heights of testimonial quotes
        $('.testimonial-group .testimonial').matchHeight();

        //    Set equal heights of homepage hero carousel elements
        $('#home-hero-carousel .owl-item').matchHeight();
        $('#home-hero-carousel .full-width-block-content-container').matchHeight();
        $('#home-hero-carousel .full-width-block-container').matchHeight();

        //Set equal heights of services and expertise boxes on homepage
        $('#home-block-services-and-expertise').find('showcase-block').matchHeight();

        //Make title and blurb section of homepage hero banner the same on all slides
        //then add some margin
        $('.home-hero-title-and-blurb').matchHeight().css('margin-bottom', '24px');

        if($(window).width() >= 769) {
            //Make menu-titles in anchor links lists the same width, if more than one is present on the page
            $('.anchor-links-list .menu-title').matchWidths();
        } else {
            //Otherwise if screen is smaller than 769px width, set .menu-title widths to auto
            $('.anchor-links-list .menu-title').css('width', 'auto');
        }

    }).resize();

    $('.menu-title-toggle').on('click', function()
        { $(this).siblings('li:not(.menu-title)').toggleClass('hide-s'); });

//    Handle the PA Services contact link (opens a modal and loads contact details using AJAX)
//    $('a.pa-service-ajax-contact').click(function(event) {
//
//        $.ajax({
//
//            url: $(this).data('modal-url'),
//
//            success: function(newHTML, textStatus, jqXHR) {
//               $('#modal').html(newHTML).modal();
//
//            },
//
//            error: function(jqXHR, textStatus, errorThrown) {
//                // Handle AJAX errors
//            }
//
//            // More AJAX customization goes here.
//
//        });
//
//        return false;
//    });


//    Explore our Network drop-down triggers
    $('#mobile-header-global-network-menu, #footer-global-network').change(function() {
        if($(this).val()) {
            window.location = $(this).val();
        }
    });

//    Hide contact forms on Contact Us page
    $('.contact-us-form').hide();
//    Contact Us page buttons reveal forms
    $('.contact-us-form-reveal-button').on('click', function()
    {
        $(this).parent().next('.contact-us-form').slideToggle(300);
        return false;
    })

//    Show the back to top link after scrolling 800px
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 800) {
            $('.button-back-to-top').fadeIn();
        } else {
            $('.button-back-to-top').fadeOut();
        }
    });

    /*
     * Replace all SVG images with inline SVG
     */
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });

})(jQuery);

