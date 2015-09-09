(function() {

    //Initialise isotope after images have been loaded to avoid layout issues
    var people = $('.people-group').imagesLoaded(function()
    {
        people.isotope({
            itemSelector: '.person',
            //containerStyle: null,
            layoutMode: 'fitRows',
            // Only fade, don't resize items when filtering
            hiddenStyle: { opacity: 0},
            visibleStyle: { opacity: 1}
        });
    });

    //Filter all results by text input
    $('#text-filter').keyup(function () {
        clearFilter(); // Clear any existing filters first

        var filter_array = new Array();
        var filter = this.value.toLowerCase();  // no need to call jQuery here

        filter_array = filter.split(' '); // split the user input at the spaces

        var arrayLength = filter_array.length; // Get the length of the filter array

        var count = 0; // Set a count to display the number of Fipriots found

        $('.person').each(function() {
            /* cache a reference to the current .media (you're using it twice) */
            var _this = $(this);
            var title = _this.find('h4').text().toLowerCase();

            /*
             title and filter are normalized in lowerCase letters
             for a case insensitive search
             */

            var hidden = 0; // Set a flag to see if a div was hidden

            // Loop through all the words in the array and hide the div if not found
            for (var i = 0; i < arrayLength; i++) {
                if (title.indexOf(filter_array[i]) < 0) {
                    _this.removeClass('text-filter-show');
                    hidden = 1;
                }
            }
            // If the flag hasn't been tripped show the div
            if (hidden == 0)  {
                _this.addClass('text-filter-show');
                count++;
            }
        });

        //Is the value entered empty?
        if(filter == '') {
            $('.filtering-on-title').text('Showing ' + $('.number-of-fipriots').text() + ' Fipriots');
            $('.clear-filter').addClass('hide');
        } else {
            var s = (count == 1) ? '' : 's';
            $('.filtering-on-title').text('Found ' + count + ' Fipriot' + s);
            $('.clear-filter').removeClass('hide');
        }
        people.isotope({filter: '.text-filter-show'});
    });

//When a filter option is clicked, get isotope to filter the items
//then make the current choice active
    $('.filter-list').on( 'click', 'li a', function(e) {
        e.preventDefault();
        var filterValue = $( this ).attr('data-filter');
        people.isotope({ filter: filterValue });

        $('.filter-list li a').removeClass('active');
        $(this).addClass('active');

//    Update the "filtering on" text
        $('.filtering-on-title').text($(this).data('filtering-on-text'));
//    Show clear filter button
        $('.clear-filter').removeClass('hide');
    });

//When a link with class .filter-group-trigger is clicked,
//open the filter-group with the id in the data-filter-group field
    $('.filter-group-trigger').on('click', function(e)
    {
        e.preventDefault();
        var isActive = $(this).hasClass('active');

        if(! $(this).hasClass('sub')) //Isn't a sub filter trigger, e.g. continents under country
        {
            $('.filter-group-trigger').removeClass('active');
            //    Change the icon
            $('.filter-group-trigger i').removeClass('icon-up-open').addClass('icon-down-open');
        }
            //Reset all filter-group-trigger and filter-group elements
            $('.filter-group').addClass('hide');

            if ( ! isActive )
            {
                $(this).addClass('active');
                $($(this).data('filter-group')).removeClass('hide');
                $(this).find('i').removeClass('icon-down-open').addClass('icon-up-open');
                $(this).parents().find('li:not(.menu-title)').removeClass('hide-s');
            }
    });

//When .clear-filter is clicked, reset the filtering
//and reset the active filter option
    $('.clear-filter').on('click', function(e) {
        e.preventDefault();
        clearFilter();
        $('.filtering-on-title').text('Showing ' + $('.number-of-fipriots').text() + ' Fipriots');
        //Clear the text filter input
        $('#text-filter').val('');
    });

    function clearFilter() // Receives the event
    {
        people.isotope({ filter: '' });
        //Remove active class from active filter
        $('.filter-list li a').removeClass('active');
        //Hide the clear filter button
        $('.clear-filter').addClass('hide');
    }

    function filterGroupClose()
    {
        $('.filter-group-trigger').removeClass('active').removeClass('filter-group-close');
        $('.filter-group').addClass('hide');
        $('.filter-group-trigger i').removeClass('icon-up-open').addClass('icon-down-open');
    }
})();
