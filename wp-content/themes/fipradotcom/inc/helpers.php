<?php

// Helper functions

/**
* Helper function to layout each team member in a team group carousel
*
* @param $post_id
* @param bool|false $short_bio
* @return bool|string
*/
function layout_fipriot_team_member($post_id, $short_bio = false) {
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
    if( $short_bio === true ) { $string .= '<p class="small">' . get_field('short_bio', $post_id) . '</p>'; }
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

if ( $fipriots ) {
$string = '';

foreach ( $fipriots as $fipriot ) {
$string .= layout_fipriot_team_member($fipriot->ID);
}
}

return $string;
}
