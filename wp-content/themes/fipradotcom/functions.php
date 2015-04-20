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
            'name'          => __('Sidebar', 'fipradotcom'),
            'id'            => 'sidebar-1',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        )
    );
}

add_action('widgets_init', 'fipradotcom_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function fipradotcom_scripts()
{
    wp_enqueue_style('fipradotcom-style', get_stylesheet_uri());

    wp_enqueue_style(
        'fipradotcom-google-fonts',
        'http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic|PT+Serif:400,700,400italic,700italic'
    );
    wp_enqueue_style(
        'fipradotcom-fontawesome',
        'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'
    );
    wp_enqueue_style(
        'fipradotcom-typicons',
        get_template_directory_uri() . '/fonts/typicons.min.css'
    );
    wp_enqueue_style(
        'fipradotcom-fontello',
        get_template_directory_uri() . '/fonts/fontello/css/iconfonts.css'
    );

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
        'fipradotcom-user-js',
        get_template_directory_uri() . '/js/site.js',
        array(),
        '20120206',
        true
    );

    wp_enqueue_script(
        'fipradotcom-skip-link-focus-fix',
        get_template_directory_uri() . '/js/skip-link-focus-fix.js',
        array(),
        '20130115',
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
function fipra_sitewide_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search..." />
	<button class="button-search"><i class="fa fa-search fa-lg"></i><span class="screen-reader-text"> ' . esc_attr__( 'Search' ) . '</span></button>
	</div>
	</form>';

    return $form;
}

add_filter( 'get_search_form', 'fipra_sitewide_search_form' );