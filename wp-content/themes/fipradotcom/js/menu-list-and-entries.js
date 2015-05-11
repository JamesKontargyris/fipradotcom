(function($) {
    //Hide all entries in the group first
    $('.entry-group .entry:not(:first-child)').addClass('hide');

//Link in menu-list is clicked
    $('.menu-list li a').on('click', function(e)
    {
        //Cache the link clicked
        var link = $(this),
            //Get the id of the entry to show from the href attribute
            entryToShow = link.attr('href'),
            //Get the number of the entry group to affect
            entryGroup = '#entry-group-' + link.parents('.menu-list').data('entry-group');

        //Stop the link's default action
        e.preventDefault();

        //Change the active link in the menu
        link.parents('.menu-list').children('li').removeClass('active');
        link.parents('li').addClass('active');

        //Change the opacity of the current entry-group to hide it, show the correct entry,
        // then change the opacity back to 1
        $(entryGroup).animate({ opacity: 0 }, 300, function()
        {
            //Hide all entries
            $(entryGroup + ' .entry').addClass('hide');
            //Remove the hide class from the correct entry
            $(entryGroup + ' ' + entryToShow).removeClass('hide');
            //Show the entry-group again
            $(this).animate({ opacity: 1 });
        });
    });

    $('.entry-title').on('click', function(e)
    {
        $(this).next('.entry-content').toggleClass('show');
        $(this).find('.icon-toggle').toggleClass('icon-up-open', 'icon-down-open');
    });
})(jQuery);
