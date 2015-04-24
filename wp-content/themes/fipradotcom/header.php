<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fipradotcom
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'fipradotcom'); ?></a>

    <div id="global-network-menu-container">
        <div id="global-network-menu">
            <div id="menuzord" class="menuzord">
                <ul class="menuzord-menu">
                    <li><a href="#">Europe</a> <i class="icon-down-open"></i>
                        <div class="megamenu">
                            <div class="megamenu-row">
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Austria.png" class="global-network-menu-flag" alt="United Kingdom"/> Austria
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Belarus.png" class="global-network-menu-flag" alt="United Kingdom"/> Belarus
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Belgium.png" class="global-network-menu-flag" alt="United Kingdom"/> Belgium
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Bulgaria.png" class="global-network-menu-flag" alt="United Kingdom"/> Bulgaria
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Croatia.png" class="global-network-menu-flag" alt="United Kingdom"/> Croatia
                                    </a>
                                </div>
                            </div>
                            <div class="megamenu-row">
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Czech-Republic.png" class="global-network-menu-flag" alt="United Kingdom"/> Czech Republic
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Denmark.png" class="global-network-menu-flag" alt="United Kingdom"/> Denmark
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Estonia.png" class="global-network-menu-flag" alt="United Kingdom"/> Estonia
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Finland.png" class="global-network-menu-flag" alt="United Kingdom"/> Finland
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/France.png" class="global-network-menu-flag" alt="United Kingdom"/> France
                                    </a>
                                </div>
                            </div>
                            <div class="megamenu-row">
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Germany.png" class="global-network-menu-flag" alt="United Kingdom"/> Germany
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Hungary.png" class="global-network-menu-flag" alt="United Kingdom"/> Hungary
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Italy.png" class="global-network-menu-flag" alt="United Kingdom"/> Italy
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Latvia.png" class="global-network-menu-flag" alt="United Kingdom"/> Latvia
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Lithuania.png" class="global-network-menu-flag" alt="United Kingdom"/> Lithuania
                                    </a>
                                </div>
                            </div>
                            <div class="megamenu-row">
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Luxembourg.png" class="global-network-menu-flag" alt="United Kingdom"/> Luxembourg
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Netherlands.png" class="global-network-menu-flag" alt="United Kingdom"/> Netherlands
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Norway.png" class="global-network-menu-flag" alt="United Kingdom"/> Norway
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Poland.png" class="global-network-menu-flag" alt="United Kingdom"/> Poland
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Portugal.png" class="global-network-menu-flag" alt="United Kingdom"/> Portugal
                                    </a>
                                </div>
                            </div>
                            <div class="megamenu-row">
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Romania.png" class="global-network-menu-flag" alt="United Kingdom"/> Romania
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Slovakia.png" class="global-network-menu-flag" alt="United Kingdom"/> Slovakia
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Slovenia.png" class="global-network-menu-flag" alt="United Kingdom"/> Slovenia
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Spain.png" class="global-network-menu-flag" alt="United Kingdom"/> Spain
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Sweden.png" class="global-network-menu-flag" alt="United Kingdom"/> Sweden
                                    </a>
                                </div>
                            </div>
                            <div class="megamenu-row">
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Turkey.png" class="global-network-menu-flag" alt="United Kingdom"/> Turkey
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/Ukraine.png" class="global-network-menu-flag" alt="United Kingdom"/> Ukraine
                                    </a>
                                </div>
                                <div class="country-tag">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/flags/United-Kingdom.png" class="global-network-menu-flag" alt="United Kingdom"/> United Kingdom
                                    </a>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li><a href="#">Africa</a> <i class="icon-down-open"></i>
                        <div class="megamenu">More country links here</div>
                    </li>
                    <li><a href="#">Asia</a> <i class="icon-down-open"></i>
                        <div class="megamenu">More country links here</div>
                    </li>
                    <li><a href="#">Americas</a> <i class="icon-down-open"></i>
                        <div class="megamenu">More country links here</div>
                    </li>
                    <li><a href="#">Oceania</a> <i class="icon-down-open"></i>
                        <div class="megamenu">More country links here</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="mobile-header-global-network-container">
        <div id="mobile-header-global-network">
            <div class="title">Explore our Global Network:</div>
            <select name="mobile-header-global-network-menu" id="mobile-header-global-network-menu">
                <option value="">Please select...</option>
                <optgroup label="Continent Name">
                    <option value="1">Country Name</option>
                    <option value="2">Country Name</option>
                    <option value="3">Country Name</option>
                </optgroup>
            </select>
        </div>
    </div>

    <div id="mobile-search-container">
        <div id="mobile-search">
            <?php get_search_form( true ); ?>
        </div>
    </div>
    <div id="header-container" class="with-border">
        <header id="masthead" class="site-header" role="banner">
            <div id="site-branding-container">
                <div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/fipra_logo.jpg"
                                alt="Fipra" width="72" height="72"/></a></h1>
                </div>
                <!-- .site-branding -->
            </div>
            <!-- #site-branding-container -->

            <div id="site-navigation-container">
                <div class="search-global-network-button">
                    <?php get_search_form( true ); ?>
                    <a class="global-network-button br-bottom" href="global-network"><i class="icon-globe"></i> Explore our Global Network</a>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <a class="mobile-menu-global-network btn primary no-margin"><i class="icon-globe"></i></a>
                    <a class="mobile-menu-search btn primary no-margin"><i class="icon-search"></i></a>
                    <a class="mobile-menu-toggle btn secondary no-margin" aria-controls="primary-menu-mobile" aria-expanded="false"><i class="icon-menu-1"></i> <?php _e(strtoupper('Menu'), 'fipradotcom'); ?></a>

                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                </nav>
                <!-- #site-navigation -->
            </div>
            <!-- #site-navigation-container -->

        </header>
        <div id="primary-menu-mobile-container">
            <div id="primary-menu-mobile">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'depth' => '1')); ?>
            </div>
        </div>
        <!-- #masthead -->
    </div>
