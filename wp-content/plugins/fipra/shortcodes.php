<?php

// Shortcode functions and registrations

/**
 * Display the areas of expertise on the homepage
 *
 * @return string
 */
function home_areas_of_expertise_sc() {
$expertise = get_expertise_areas(true); // true indicates that only areas marked as for display on the homepage should be shown
$string = '';

if($expertise->have_posts()) {

while($expertise->have_posts()) {
$expertise->the_post();

$string .= '<div class="showcase-block">';
    $string .= '<a href="' . get_the_permalink() . '"><div class="svg-icon margin-r">';
            $string .= file_get_contents(get_field('icon'));
            $string .= '</div></a>';
    $string .= '<div>';
        $string .= '<h4 class="no-margin"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
        $string .= '<p>' . get_field('short_introduction') . '</p>';
        $string .= '</div>';
    $string .= '</div>';
}
}

return $string;
}
add_shortcode( 'home_areas_of_expertise', 'home_areas_of_expertise_sc' );




/**
* Display Fipriots that are marked as available on the homepage in a carousel
* @return string
*/
function home_fipriots_sc() {
$fipriots = get_homepage_fipriots();
$string = '';

if ( $fipriots->have_posts() ) {
$string .= '<div id="our-people-carousel" class="team-carousel with-controls" data-number-of-items="' . $fipriots->found_posts . '">';

    while ( $fipriots->have_posts() ) {
    $fipriots->the_post();

    $string .= layout_fipriot_team_member(get_the_ID());
    }

    $string .=  '</div>';
}

return $string;
}
add_shortcode( 'home_fipriots', 'home_fipriots_sc' );


/**
 * Display the testimonials template for the current page.
 * Can be used as a template function.
 *
 * @return bool|string
 */
function page_testimonials() {
//    Get the ID of the current page
    $page_id = get_master_page_id();

//    Get the testimonials assigned to this page
    $page_testimonials = get_field('testimonials', $page_id);
    $string = '';

    if ( $page_testimonials ) {
        $string .= '<div class="full-width-block-container with-content-bar small-padding">';
        $string .= '<div class="full-width-block-content-container dark-grey">';
        $string .= '<div class="full-width-block-content">';
        if(get_field('testimonials_title', $page_id)) { $string .= '<h5 class="center">' . get_field('testimonials_title', $page_id) . '</h5>'; }
        $string .= '<div id="testimonial-carousel" class="testimonial-group carousel">';

        foreach($page_testimonials as $t) {
//                          Get the id of the current post object (testimonial object)
            $t_id = $t->ID;

            $string .= '<blockquote class="testimonial">';
            $string .= '<div class="quote">' . get_field('quote', $t_id) . '</div>';
            $string .= '<footer class="author">';
            $string .= '<div class="author-details">';
            $string .= '<span class="name">' . get_field('name', $t_id) . '</span><br/>';
            if (get_field('position', $t_id)) $string .= get_field('position', $t_id);
            if (get_field('position', $t_id) && get_field('company_organisation', $t_id)) $string .= ', ';
            if (get_field('company_organisation', $t_id)) $string .= get_field('company_organisation', $t_id);
            $string .= '</div>';
            $string .= '</footer>';
            $string .= '</blockquote>';
        }

        $string .= '</div>';
        $string .= '</div>';
        $string .= '</div>';
        $string .= '</div>';

        return $string;
    }

    return false;

}
add_shortcode( 'page_testimonials', 'page_testimonials' );

/**
 * Display Units grouped by continent
 */
function our_network_sc() {
    include(get_template_directory() . '/inc/our_network.php');
}
add_shortcode( 'our_network_by_continent', 'our_network_sc' );

function get_job_listings_sc() {
    $job_listings = get_all_jobs();
    $string = '';

    if($job_listings->have_posts()) {
        $job_text = $job_listings->found_posts == 1 ? 'vacancy' : 'vacancies';

        $string .= '<h4>' . $job_listings->found_posts . ' ' . $job_text . '</h4>';

        while($job_listings->have_posts()) {
            $job_listings->the_post();

            $string .= '<div class="job-listing-block">
                            <div class="row">
                                <div class="col-8-m no-bottom-margin">';
                                    $string .= '<div class="job-listing-title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></div>';
                                    $string .= '<div class="job-listing-meta">';
                                        $string .= get_field('location_information') ?  get_field('location_information') : '';
                                        $string .= get_field('location_information') && get_field('salary_information') ? ', ' : '';
                                        $string .= get_field('salary_information') ? get_field('salary_information') : '';
                                    $string .= '</div>';
                                $string .= '</div>';
                                $string .= '<div class="col-4-m no-bottom-margin">';
                                    $string .= '<div class="job-listing-timestamp">Posted: <strong>' . date('d M Y', strtotime(get_the_date())) . '</strong>';
                                    $string .= get_field('closing_date') ? '<br/>Closes: <strong>' . date('d M Y', strtotime(get_field('closing_date'))) . '</strong>' : '';
                                    $string .= '</div>';
                                $string .= '</div>';
                            $string .= '</div>';
                            $string .= '<div class="row">';
                                $string .= '<div class="job-listing-overview">';
                                    $string .= '<p>' . get_field('summary') . '</p>';
                                    $string .= '<p class="no-margin"><a href="' . get_the_permalink() . '" class="btn btn-extra-small primary">Read more</a></p>';
                                $string .= '</div>';
                            $string .= '</div>';
                    $string .= '</div>';
        }

        return $string;
    } else {
        return '<h4>No vacancies at this time.</h4>';
    }
}
add_shortcode( 'job_listings', 'get_job_listings_sc' );