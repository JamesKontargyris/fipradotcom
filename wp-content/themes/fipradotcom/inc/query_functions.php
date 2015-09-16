<?php

// Functions that query the database

function get_all_fipriots($include_spads = false) {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'meta_key' => 'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC',
    ];

    if($include_spads) {
        $args['meta_query'] = [
            [
                'key'     => 'is_special_adviser',
                'value'   => '1',
                'compare' => 'LIKE',
            ]
        ];
    }

    $fipriots = new WP_Query($args);
    wp_reset_postdata();

    return $fipriots;
}

function get_all_spads() {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'meta_key' => 'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => [
            [
                'key'     => 'is_special_adviser',
                'value'   => '1',
                'compare' => 'LIKE',
            ],
        ],
    ];

    $spads = new WP_Query($args);
    wp_reset_postdata();

    return $spads;
}

function get_homepage_fipriots($include_spads = false) {

    global $post;

    $args = [
        'post_type' => 'fipriot',
        'post_status' => 'publish',
        'meta_key' => 'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => [
            [
                'key'     => 'on_homepage',
                'value'   => '1',
                'compare' => 'LIKE',
            ]
        ]
    ];

    if($include_spads) {
        $args['meta_query'][] =
            [
                'key'     => 'is_special_adviser',
                'value'   => '1',
                'compare' => 'LIKE',
            ];
    }

    $fipriots = new WP_Query($args);
    wp_reset_postdata();

    return $fipriots;
}

function get_homepage_blocks() {

    global $post;

    $args = [
        'post_type' => 'homeblock',
        'post_status' => 'publish',
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
    ];

    $slides = new WP_Query($args);
    wp_reset_postdata();

    return $slides;
}

function get_expertise_areas($homepage_only = false) {

    global $post;

    $args = [
        'post_type' => 'expertise',
        'post_status' => 'publish',
    ];

    if( $homepage_only ) {
        $args['meta_query'][] = [
            'key'     => 'on_homepage',
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
//        'meta_key' => 'last_name',
//        'orderby' => 'meta_value',
//        'order' => 'ASC',
    ];

    $paservices = new WP_Query($args);
    wp_reset_postdata();

    return $paservices;
}