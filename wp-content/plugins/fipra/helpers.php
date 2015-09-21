<?php

// Helper functions

/**
 * Helper function to layout each team member in a team group carousel
 *
 * @param $post_id
 * @param bool|false $short_bio
 * @param bool $expertise
 * @return bool|string
 */
function layout_fipriot_team_member($post_id, $short_bio = false, $expertise = false) {
    if( $post_id ) {
        $string = '';

        $string .= '<div class="team-member">';
            $string .= '<div class="profile-photo">';
                if ( has_post_thumbnail($post_id) ) {
                    $string .= '<a href="' . get_the_permalink($post_id) . '">';
                    $string .= '<img src="' . wp_get_attachment_url( get_post_thumbnail_id($post_id) ) . '" alt="' . get_field('first_name', $post_id) . ' ' . get_field('last_name', $post_id) . '" style="width:200px;"/>';
                    $string .= '</a>';
                }
            $string .= '</div>';
            $string .= '<h4 class="no-bottom-margin"><a href="' . get_the_permalink($post_id) . '">' . get_field('first_name', $post_id) . ' ' . get_field('last_name', $post_id) . '</a></h4>';
        //        TODO add unit
            $string .= '<h6>' . get_field('position', $post_id) . '</h6>';
//            If $short_bio is true, include the Fipriot's short bio text
            if( $short_bio === true ) { $string .= '<p class="small">' . get_field('short_bio', $post_id) . '</p>'; }
//            If $expertise is true, iterate through expertise areas and display an icon link for each one
            if( $expertise === true ) {
//                Fipriot has expertise set?
                if( get_field('expertise', $post_id) ) {
                    $string .= '<ul class="team-member-expertise">';
                    $string .= '<li>';
                    foreach(get_field('expertise', $post_id) as $expertise) {
                        $string .= '<a href="' . get_the_permalink($expertise->ID) . '" class="tooltip svg-icon" title="' . get_the_title($expertise->ID) . '">';
                        $string .= file_get_contents( get_field('icon', $expertise->ID) );
                        $string .= '</a>';
                    }
                    $string .= '</li>';
                    $string .= '</ul>';
                }
            }

        $string .=  '</div>';

    return $string;
    } else {
        return false;
    }
}


/**
 * Layout practice staff team members on expertise pages
 *
 * @param $fipriots
 * @return string
 */
function layout_practice_staff($fipriots) {
    $string = '';

    if ( $fipriots ) {

        foreach ( $fipriots as $fipriot ) {
            $string .= layout_fipriot_team_member($fipriot->ID);
        }
    }

    return $string;
}

/**
 * Layout team members on Unit pages
 *
 * @param $fipriots
 * @return string
 */
function layout_our_team($fipriots) {
    $string = '';

    if ( $fipriots ) {

        foreach ( $fipriots as $fipriot ) {
            $string .= layout_fipriot_team_member($fipriot->ID, false, true);
        }
    }

    return $string;
}

/**
 * Return the full name for the current Fipriot
 *
 * @return bool|string
 */
function full_name() {
    $first_name = get_field('first_name');
    $last_name = get_field('last_name');

    if($first_name && $last_name) { return $first_name . ' ' . $last_name; }
    return false;
}

/**
 * Return the URL to the flag image for the current language
 *
 * @param $term_id
 * @return array|false
 */
function get_language_flag_url($term_id) {


    $meta = get_option('flag_section');
    if (empty($meta)) $meta = array();
    if (!is_array($meta)) $meta = (array) $meta;
    $meta = isset($meta[$term_id]) ? $meta[$term_id] : array();
    $images = $meta['image'];
    foreach ($images as $att) {
        // get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
        $src = wp_get_attachment_image_src($att, 'full');
        $src = $src[0];

        // return URL
        return $src;
    }
}

function get_search_results() {
    global $wp_query;
    return  $wp_query->found_posts;
}