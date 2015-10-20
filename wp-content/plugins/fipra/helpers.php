<?php

// Helper functions

/**
 * Helper function to layout each team member in a team group carousel
 *
 * @param $post_id
 * @param bool|false $short_bio
 * @param bool $expertise
 * @param bool $unit
 * @return bool|string
 */
function layout_fipriot_team_member($post_id, $expertise = false, $unit = true, $position = true) {
    if( $post_id ) {
        $string = '';

        $string .= '<div class="team-member">';
            $string .= '<div class="profile-photo">';
                $string .= '<a href="' . get_the_permalink($post_id) . '">';
                    if ( has_post_thumbnail($post_id) ) {
                        $string .= '<img src="' . wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'profile-photo' )[0] . '" alt="' . get_field('first_name', $post_id) . ' ' . get_field('last_name', $post_id) . '" class="photo-tile" />';
                    } else {
                        $string .= '<img src="' . get_template_directory_uri() . '/img/blank_profile_' . get_field('gender', $post_id) . '.png" alt="' . get_field('first_name', $post_id) . ' ' . get_field('last_name', $post_id) . '" title="' . get_field('first_name', $post_id) . ' ' . get_field('last_name', $post_id) . '" class="photo-tile" />';
                    }
                $string .= '</a>';
            $string .= '</div>';

            $string .= '<div class="profile-details">';
                $string .= '<h4 class="no-bottom-margin"><a href="' . get_the_permalink($post_id) . '">' . get_field('first_name', $post_id) . ' ' . get_field('last_name', $post_id) . '</a></h4>';
                if(get_field('is_special_adviser', $post_id)) {
                    $string .= '<h6>Special Adviser';
                    if(get_field('special_adviser_expertise')) $string .= '<br>' . get_field('special_adviser_expertise');
                    $string .= '</h6>';
                } else {
                    $position_title = get_field('position', $post_id);
                    $unit_id = get_field('unit', $post_id)[0];
//                    Fipriot has either a position or unit assigned?
                    if($position_title || $unit_id) {
                        $string .= '<h6>';
                            if($position && $position_title) { $string .= $position_title; };
                            if($position_title && $unit_id) { $string .= '<br>'; }
                            if($unit && $unit_id) { $string .= fiprafy_unit_name(get_the_title($unit_id)); }
                        $string .= '</h6>';
                    }
                }
    //            If $expertise is true, iterate through expertise areas and display an icon link for each one
                if( $expertise === true ) {
    //                Fipriot has expertise set?
                    if( get_field('expertise', $post_id) ) {
                        $string .= '<ul class="team-member-expertise">';
                        $string .= '<li>';
                        foreach(get_field('expertise', $post_id) as $expertise) {
                            $string .= '<a href="' . get_the_permalink($expertise) . '" class="tooltip svg-icon" title="' . get_the_title($expertise) . '">';
                            $string .= file_get_contents( get_field('icon', $expertise) );
                            $string .= '</a>';
                        }
                        $string .= '</li>';
                        $string .= '</ul>';
                    }
                }
            $string .=  '</div>';
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
            $string .= layout_fipriot_team_member($fipriot->ID, true);
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
    if(isset($meta['image'])) {

        $images = $meta['image'];
        foreach ($images as $att) {
            // get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registered post thumbnails sizes
            $src = wp_get_attachment_image_src($att, 'full');
            $src = $src[0];

            // return URL
            return $src;
        }
    } else {
        return false;
    }
}

function get_search_results() {
    global $wp_query;
    return  $wp_query->found_posts;
}

function get_slug() {
    global $post;
    return $post->post_name;
}

function make_class_name($string, $prefix = '', $suffix = '') {
    if($string) {
        if($prefix) $prefix = $prefix . '-';
        if($suffix) $suffix = '-' . $suffix;
        $full_string = $prefix . $string . $suffix;

        return str_replace(' ', '-', strtolower($full_string));
    }
}

function fiprafy_unit_name($unit_name) {
    return 'Fipra ' . str_ireplace('fipra', '', $unit_name);
}