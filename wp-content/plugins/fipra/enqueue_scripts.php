<?php

/**
 * Enqueue scripts and styles.
 */
function fipradotcom_scripts()
{
    wp_enqueue_style(
        'fipradotcom-google-fonts',
        'http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic|Lora:400,700,400italic,700italic'
    );
    wp_enqueue_style(
        'fipradotcom-typicons',
        get_template_directory_uri() . '/fonts/typicons.min.css'
    );
    wp_enqueue_style(
        'fipradotcom-fontello',
        get_template_directory_uri() . '/fonts/fontello/css/iconfonts.css'
    );
    wp_enqueue_style(
        'fipradotcom-tooltipster',
        get_template_directory_uri() . '/css/tooltipster.css'
    );
    wp_enqueue_style(
        'fipradotcom-jquery-modal',
        get_template_directory_uri() . '/js/jquery-modal/jquery.modal.css'
    );
    wp_enqueue_style(
        'fipradotcom-owl-carousel',
        get_template_directory_uri() . '/js/owl-carousel/owl.carousel.css'
    );
    wp_enqueue_style(
        'fipradotcom-owl-carousel-theme',
        get_template_directory_uri() . '/js/owl-carousel/owl.theme.css'
    );
    wp_enqueue_style(
        'fipradotcom-owl-carousel-transitions',
        get_template_directory_uri() . '/js/owl-carousel/owl.transitions.css'
    );

    wp_enqueue_style('fipradotcom-style', get_stylesheet_uri());

//    wp_enqueue_script(
//        'fipradotcom-navigation',
//        get_template_directory_uri() . '/js/navigation.js',
//        array(),
//        '20120206',
//        true
//    );

    wp_enqueue_script(
        'fipradotcom-jquery',
        'https://code.jquery.com/jquery-2.1.3.min.js',
        array(),
        '20120206',
        true
    );

    wp_enqueue_script(
        'fipradotcom-menuzord-js',
        get_template_directory_uri() . '/js/menuzord.js',
        array(),
        '20150423',
        true
    );

    wp_enqueue_script(
        'fipradotcom-matchheights-js',
        get_template_directory_uri() . '/js/jquery.matchHeight-min.js',
        array(),
        '20150428',
        true
    );

    wp_enqueue_script(
        'fipradotcom-tooltipster-js',
        get_template_directory_uri() . '/js/jquery.tooltipster.min.js',
        array(),
        '20150428',
        true
    );

    wp_enqueue_script(
        'fipradotcom-jquery-modal',
        get_template_directory_uri() . '/js/jquery-modal/jquery.modal.min.js',
        array(),
        '20150423',
        true
    );

    wp_enqueue_script(
        'fipradotcom-jquery-owl-carousel',
        get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js',
        array(),
        '20150429',
        true
    );

    wp_enqueue_script(
        'fipradotcom-skip-link-focus-fix',
        get_template_directory_uri() . '/js/skip-link-focus-fix.js',
        array(),
        '20130115',
        true
    );

    wp_enqueue_script(
        'fipradotcom-jquery-actual-height-of-hidden-elements',
        get_template_directory_uri() . '/js/jquery.actual.min.js',
        array(),
        '20150511',
        true
    );

    wp_enqueue_script(
        'fipradotcom-jquery-imagesLoaded',
        get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js',
        array(),
        '20150515',
        true
    );

    wp_enqueue_script(
        'fipradotcom-jquery-izotone',
        get_template_directory_uri() . '/js/isotope.pkgd.min.js',
        array(),
        '20150514',
        true
    );

    wp_enqueue_script(
        'fipradotcom-jquery-equalize',
        get_template_directory_uri() . '/js/equalize.min.js',
        array(),
        '20150514',
        true
    );

    wp_enqueue_script(
        'fipradotcom-hover-touch-unstick',
        get_template_directory_uri() . '/js/hoverTouchUnstick.js',
        array(),
        '20150528',
        true
    );

    wp_enqueue_script(
        'fipradotcom-user-js',
        get_template_directory_uri() . '/js/site.js',
        array(),
        '20120206',
        true
    );

    wp_enqueue_script(
        'fipradotcom-user-js-our-people',
        get_template_directory_uri() . '/js/our-people.js',
        array(),
        '20150515',
        true
    );

    wp_enqueue_script(
        'fipradotcom-user-menu-link-and-entries-js',
        get_template_directory_uri() . '/js/menu-list-and-entries.js',
        array(),
        '20150511',
        true
    );


    if(is_single()) {

        wp_enqueue_script(
            'fipradotcom-units-js',
            get_template_directory_uri() . '/js/unit.js',
            array(),
            '20151007',
            true
        );

        wp_enqueue_script(
            'fipradotcom-google-maps-api-js',
            'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false',
            array(),
            '20150918',
            true
        );

        wp_enqueue_script(
            'fipradotcom-google-maps-site-js',
            get_template_directory_uri() . '/js/google-maps.js',
            array(),
            '20150511',
            true
        );

    }


    if(is_home()) {
        wp_enqueue_script(
            'fipradotcom-home-js',
            get_template_directory_uri() . '/js/home.js',
            array(),
            '20151007',
            true
        );
    }


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'fipradotcom_scripts');