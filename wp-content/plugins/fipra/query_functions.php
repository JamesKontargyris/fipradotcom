<?php

// Functions that query the database

function get_all_fipriots($include_spads = false) {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_key' => 'is_senior',
        'meta_query' => [
            'relation' => 'AND',
            [
                'key' => 'is_senior'
            ],
            [
                'key' => 'last_name'
            ],
        ],
    ];

    if( ! $include_spads) {
        $args['meta_query'][] = [
            [
                'key'     => 'is_special_adviser',
                'value'   => '1',
                'compare' => 'NOT LIKE',
            ]
        ];
    }

//    Add a filter that allows Wordpress to orderby two meta values, then remove it after querying
    add_filter('posts_orderby','orderby_two_meta_values');
    $fipriots = new WP_Query($args);
    remove_filter('posts_orderby','orderby_two_meta_values');

    wp_reset_postdata();

    return $fipriots;
}

function get_all_spads() {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_key' => 'is_senior',
        'meta_query' => [
            'relation' => 'AND',
            [
                'key' => 'is_senior'
            ],
            [
                'key' => 'last_name'
            ],
            [
                'key'     => 'is_special_adviser',
                'value'   => '1',
                'compare' => 'LIKE',
            ],
        ],
    ];

//    Add a filter that allows Wordpress to orderby two meta values, then remove it after querying
    add_filter('posts_orderby','orderby_two_meta_values');
    $spads = new WP_Query($args);
    remove_filter('posts_orderby','orderby_two_meta_values');

    wp_reset_postdata();

    return $spads;
}

function get_all_fipriots_by_unit($unit_id = 0, $include_spads = false) {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_key' => 'is_senior',
        'meta_query' => [
            'relation' => 'AND',
            [
                'key' => 'is_senior'
            ],
            [
                'key' => 'last_name'
            ],
            [
                'key' => 'unit',
                'value' => $unit_id,
                'compare' => 'LIKE',
            ],
        ],
    ];

    if( ! $include_spads) {
        $args['meta_query'][] = [
            'key'     => 'is_special_adviser',
            'value'   => '1',
            'compare' => 'NOT LIKE',
        ];
    }

//    Add a filter that allows Wordpress to orderby two meta values, then remove it after querying
    add_filter('posts_orderby','orderby_two_meta_values');
    $fipriots = new WP_Query($args);
    remove_filter('posts_orderby','orderby_two_meta_values');

    wp_reset_postdata();

    return $fipriots;
}

function get_all_fipriots_by_expertise_area($expertise_id = 0, $include_spads = false) {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query' => [
            'relation' => 'AND',
            [
                'key' => 'expertise',
                'value' => $expertise_id,
                'compare' => 'LIKE',
            ],
        ],
    ];

    if( ! $include_spads) {
        $args['meta_query'][] = [
            'key'     => 'is_special_adviser',
            'value'   => '1',
            'compare' => 'NOT LIKE',
        ];
    }

    $fipriots = new WP_Query($args);
    wp_reset_postdata();

    return $fipriots;
}

function get_homepage_fipriots() {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'meta_key' => 'is_senior',
        'posts_per_page' => -1,
        'meta_query' => [
            [
                'key' => 'is_senior'
            ],
            [
                'key' => 'last_name'
            ],
            [
                'key'     => 'on_homepage',
                'value'   => '1',
                'compare' => 'LIKE',
            ],
        ]
    ];

//    Add a filter that allows Wordpress to orderby two meta values, then remove it after querying
    add_filter('posts_orderby','orderby_two_meta_values');
    $fipriots = new WP_Query($args);
    remove_filter('posts_orderby','orderby_two_meta_values');

    wp_reset_postdata();

    return $fipriots;
}

function get_homepage_blocks() {

    global $post;

    $args = [
        'post_type' => 'homeblock',
        'post_status' => 'publish',
        'posts_per_page' => -1,
//        'meta_key' => 'last_name',
//        'orderby' => 'meta_value',
//        'order' => 'ASC',
    ];

    $blocks = new WP_Query($args);
    wp_reset_postdata();

    return $blocks;
}

function get_homepage_slides() {

    global $post;

    $args = [
        'post_type' => 'homeslide',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ];

    $slides = new WP_Query($args);
    wp_reset_postdata();

    return $slides;
}

function get_expertise_areas($homepage_only = false, $filterable_only = false) {

    global $post;

    $args = [
        'post_type' => 'expertise',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ];

    if( $homepage_only ) {
        $args['meta_query'][] = [
            'key'     => 'on_homepage',
            'value'   => '1',
            'compare' => 'LIKE',
        ];
    }

    if( $filterable_only ) {
        $args['meta_query'][] = [
            'key'     => 'filterable',
            'value'   => '1',
            'compare' => 'LIKE',
        ];
    }

    $expertise = new WP_Query($args);
    wp_reset_postdata();

    return $expertise;
}

function get_public_affairs_services() {

    global $post;

    $args = [
        'post_type' => 'paservice',
        'post_status' => 'publish',
        'posts_per_page' => -1,
//        'meta_key' => 'last_name',
//        'orderby' => 'meta_value',
//        'order' => 'ASC',
    ];

    $paservices = new WP_Query($args);
    wp_reset_postdata();

    return $paservices;
}

function get_units_by_continent($continent_id) {

    global $post;

    $args = [
        'post_type' => 'unit',
        'post_status' => 'publish',
//        'meta_key' => 'last_name',
        'orderby' => 'title',
        'order' => 'ASC',
        'posts_per_page' => -1,
        'meta_query' => [
            [
                'key'     => 'continent',
                'value'   => $continent_id,
                'compare' => 'LIKE',
            ]
        ]
    ];

    $units = new WP_Query($args);
    wp_reset_postdata();

    return $units;
}

function get_all_jobs($close_in_the_future = true) {

    global $post;

    $args = [
        'post_type' => 'job',
        'post_status' => 'publish',
//        'meta_key' => 'last_name',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => -1,
    ];
//    If the request is for jobs closing in the future
    if($close_in_the_future) {
        $args['meta_query'] = [
            [
                'key'     => 'closing_date',
                'value'   => date('Ymd'),
                'compare' => '>=',
            ]
        ];
    }

    $jobs = new WP_Query($args);
    wp_reset_postdata();

    return $jobs;
}

/**
 * Allows Wordpress to sort by two meta values.
 * Add +0 to meta_value for numeric comparison.
 *
 * http://dotnordic.se/sorting-wordpress-posts-by-several-numeric-custom-fields/
 *
 * @param $orderby
 * @return string
 */
function orderby_two_meta_values($orderby) {
    return 'mt1.meta_value+0 DESC, mt2.meta_value ASC';
}