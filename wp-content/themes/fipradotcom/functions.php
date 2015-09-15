<?php
/**
 * fipradotcom functions and definitions
 *
 * @package fipradotcom
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 940; /* pixels */
}

if (!function_exists('fipradotcom_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function fipradotcom_setup()
    {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on fipradotcom, use a find and replace
         * to change 'fipradotcom' to the name of your theme in all the template files
         */
        load_theme_textdomain('fipradotcom', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
//	add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => __('Primary Menu', 'fipradotcom'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array('aside'));

        // Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'fipradotcom_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
    }
endif; // fipradotcom_setup
add_action('after_setup_theme', 'fipradotcom_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fipradotcom_widgets_init()
{
    register_sidebar(
        array(
            'name' => __('Sub-Nav Bar', 'fipradotcom'),
            'id' => 'sub-nav-bar',
            'description' => 'Displays widgets in the sub-nav bar on each page',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
}

add_action('widgets_init', 'fipradotcom_widgets_init');

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



    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'fipradotcom_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//User functions
function fipra_sitewide_search_form($form)
{
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url('/') . '" >
	<div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search site..." />
	<button class="button-search"><i class="icon-search"></i><span class="screen-reader-text"> ' . esc_attr__('Search') . '</span></button>
	</div>
	</form>';

    return $form;
}

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

function full_name() {
    $first_name = get_field('first_name');
    $last_name = get_field('last_name');

    if($first_name && $last_name) { return $first_name . ' ' . $last_name; }
    return false;
}
/*
  Plugin Name: case-insensitive-url
  Plugin URI: http://www.unfocus.com/projects/
  Description: A plugin to make wordpress case insensitive in regards to urls.
  Version: 1.0a
  Author: Kevin Newman
  Author URI: http://www.unfocus.com/projects/
  */
function case_insensitive_url() {
    if (preg_match('/[A-Z]/', $_SERVER['REQUEST_URI'])) {
        $_SERVER['REQUEST_URI'] = strtolower($_SERVER['REQUEST_URI']);
//        $_SERVER['PATH_INFO']   = strtolower($_SERVER['PATH_INFO']);
    }
}
add_action('init', 'case_insensitive_url');

add_filter('get_search_form', 'fipra_sitewide_search_form');




// Thumbnail sizes
add_image_size( 'profile-photo', 300, 300 );
add_image_size( 'banner', 1500, 1000 );

/**
 * Registering meta sections for taxonomies
 *
 * All the definitions of meta sections are listed below with comments, please read them carefully.
 * Note that each validation method of the Validation Class MUST return value.
 *
 * You also should read the changelog to know what has been changed
 *
 */

// Hook to 'admin_init' to make sure the class is loaded before
// (in case using the class in another plugin)
add_action( 'admin_init', 'fipradotcom_register_taxonomy_meta_boxes' );

/**
 * Register meta boxes for taxonomies
 *
 * @return void
 */
function fipradotcom_register_taxonomy_meta_boxes()
{
    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( !class_exists( 'RW_Taxonomy_Meta' ) )
        return;

    $meta_sections = array();

    // First meta section
    $meta_sections[] = array(
        'title'      => '',             // section title
        'taxonomies' => array('language'), // list of taxonomies. Default is array('category', 'post_tag'). Optional
        'id'         => 'flag_section',                 // ID of each section, will be the option name

        'fields' => array(                             // List of meta fields
            // IMAGE
            array(
                'name' => 'Flag',
                'id'   => 'image',
                'type' => 'image',
            ),
        ),
    );

    foreach ( $meta_sections as $meta_section )
    {
        new RW_Taxonomy_Meta( $meta_section );
    }
}


// Get language flag
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

// Remove languages taxonomy metabox from sidebar of Fipriots add/edit pages
function remove_language_meta() {
    remove_meta_box( 'tagsdiv-language' , 'fipriot' , 'side' );
}
add_action( 'admin_menu' , 'remove_language_meta' );


function get_master_page_id() {
    global $wp_query;
    return $wp_query->post->ID;
}

// Shortcodes

function home_areas_of_expertise_sc() {
    $expertise_areas = [
        ['title' => 'Banking and Financial Services', 'svg' => 'coins'],
        ['title' => 'Chemical, Industrials and Mining', 'svg' => 'gears'],
        ['title' => 'Energy and Environment', 'svg' => 'windmill'],
        ['title' => 'Healthcare and Pharma', 'svg' => 'heart'],
        ['title' => 'Telecoms, Media and Technology', 'svg' => 'monitor'],
        ['title' => 'Travel, Transport and Logistics', 'svg' => 'logistics'],
        ['title' => 'Competition Policy', 'svg' => 'podium']
    ];

    $string = '';

    for($i = 0; $i <= 5; $i++) {
        $string .= '<div class="showcase-block">';
            $string .= '<a href="/expertise-area"><div class="svg-icon margin-r">';
            $string .= file_get_contents(get_template_directory_uri() . "/img/icons/" . $expertise_areas[$i]['svg'] . ".svg");
            $string .= '</div></a>';
            $string .= '<div>';
                $string .= '<h4 class="no-margin"><a href="/expertise-area">' . $expertise_areas[$i]['title'] . '</a></h4>';
                $string .= '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae distinctio ea, earum eligendi eum fugiat ipsa natus obcaecati pariatur.</p>';
            $string .= '</div>';
        $string .= '</div>';
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

            $string .= '<div class="team-member">';
                $string .= '<div class="profile-photo">';
                    if ( has_post_thumbnail() ) {
                        $string .= '<a href="' . get_the_permalink() . '">';
                            $string .= '<img src="' . wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) . '" alt="' . full_name() . '" style="width:200px;"/>';
                        $string .= '</a>';
                    }
                $string .= '</div>';
                $string .= '<h4 class="no-bottom-margin"><a href="' . get_the_permalink() . '">' . full_name() . '</a></h4>';
                $string .= '<h6>' . get_field('position') . '</h6>';
                $string .= '<p class="small">' . get_field('short_bio') . '</p>';
            $string .=  '</div>';
        }

        $string .=  '</div>';
    }

    return $string;
}
add_shortcode( 'home_fipriots', 'home_fipriots_sc' );

function page_testimonials() {
//    Get the ID of the current page
    $page_id = get_master_page_id();

//    Get the testimonials assigned to this page
    $page_testimonials = get_field('testimonials', $page_id);
    $string = '';

    if ( $page_testimonials ) {
        $string .= '<div class="full-width-block-container with-content-bar small-padding light-grey">';
            $string .= '<div class="full-width-block-content-container dark-grey">';
                $string .= '<div class="full-width-block-content left">';
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

