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

        include('inc/query_functions.php');
        include('inc/helpers.php');
        include('inc/shortcodes.php');
        include('inc/enqueue_scripts.php');

//        Use the site stylesheet in the content editor, so content looks as it would on the front-end
        add_editor_style('style.css');

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
    register_sidebar([
        'name' => __('Page Sidebar', 'fipradotcom'),
        'id' => 'sidebar-1',
        'description' => 'Displays widgets in the sidebar of standard pages',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ]);
    register_sidebar([
        'name' => __('Sub-Nav Bar', 'fipradotcom'),
        'id' => 'sub-nav-bar',
        'description' => 'Displays widgets in the sub-nav bar on each page',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ]);
}

add_action('widgets_init', 'fipradotcom_widgets_init');



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




// Post Thumbnail sizes
add_image_size( 'profile-photo', 300, 300 );
add_image_size( 'banner', 1500, 1000, true );
add_image_size( 'unit-flag', 64, 64 );

/**
 * Registering meta sections for taxonomies
 *
 * All the definitions of meta sections are listed below with comments, please read them carefully.
 * Note that each validation method of the Validation Class MUST return value.
 *
 * You also should read the changelog to know what has been changed
 *
 */

/**
 * Register meta boxes for taxonomies
 *
 * @return void
 */
function fipradotcom_register_taxonomy_meta_boxes()
{
    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( ! class_exists( 'RW_Taxonomy_Meta' ) )
        return;

    $meta_sections = array();

    // First meta section
    $meta_sections[] = [
        'title'      => '',             // section title
        'taxonomies' => array('language'), // list of taxonomies. Default is array('category', 'post_tag'). Optional
        'id'         => 'flag_section',                 // ID of each section, will be the option name

        'fields' => [                             // List of meta fields
            // IMAGE
            [
                'name' => 'Flag',
                'id'   => 'image',
                'type' => 'image',
            ],
        ],
    ];

    foreach ( $meta_sections as $meta_section )
    {
        new RW_Taxonomy_Meta( $meta_section );
    }
}
// Hook to 'admin_init' to make sure the class is loaded before
// (in case using the class in another plugin)
add_action( 'admin_init', 'fipradotcom_register_taxonomy_meta_boxes' );


// Remove languages taxonomy metabox from sidebar of Fipriots add/edit pages
function remove_language_meta() {
    remove_meta_box( 'tagsdiv-language' , 'fipriot' , 'side' );
}
add_action( 'admin_menu' , 'remove_language_meta' );

// Remove continents taxonomy metabox from sidebar of Units add/edit pages
function remove_continent_meta() {
    remove_meta_box( 'tagsdiv-continent' , 'unit' , 'side' );
}
add_action( 'admin_menu' , 'remove_continent_meta' );


function get_master_page_id() {
    global $wp_query;
    return $wp_query->post->ID;
}

/**
 * Allow svg files to be uploaded by default
 * @param $mimes
 * @return mixed
 */
function svg_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;}
add_filter( 'upload_mimes', 'svg_mime_types' );

/**
 * Ensure svg previews display correctly on admin pages
 */
function svg_size() {
    echo '<style>
    svg, img[src*=".svg"] {
      max-width: 150px !important;
      max-height: 150px !important;
    }
  </style>';
}
add_action('admin_head', 'svg_size');





