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
    $('.filter-group-trigger').removeClass('active');
    $('.filter-group').addClass('hide');
    $(this).addClass('active');
    $($(this).data('filter-group')).removeClass('hide');
    //    Change the icon
    $('.filter-group-trigger i').removeClass('icon-up-open').addClass('icon-down-open');
    $(this).find('i').removeClass('icon-down-open').addClass('icon-up-open');
    $(this).parents().find('li:not(.menu-title)').removeClass('hide-s');
});

$('.filter-group-close').on('click', function()
{
    $('.filter-group-trigger').removeClass('active');
    $('.filter-group').addClass('hide');
    $('.filter-group-trigger i').removeClass('icon-up-open').addClass('icon-down-open');
});

//When .clear-filter is clicked, reset the filtering
//and reset the active filter option
$('.clear-filter').on('click', function()
{
    people.isotope({ filter: '' });
    $('.filter-list li a').removeClass('active');
    $(this).addClass('hide');
    $('.filtering-on-title').text('Showing all ' + $('.number-of-fipriots').text() + ' Fipriots');
});