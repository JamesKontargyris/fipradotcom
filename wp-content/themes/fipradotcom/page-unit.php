<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
/*    Styles to position gradient in correct position over photo */
/*    Small and Medium Screens */
    #page-banner {
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/tower_bridge.jpg');
    }

</style>

<div id="content-container" class="with-border">

        <div id="content" class="site-content">

            <div id="page-banner">
                <div id="page-banner-content" class="unit light-text">
                    <div class="col-12-m no-margin">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flags/united-kingdom.png" alt="Flag" />
                    </div>
                    <div class="col-6-m no-margin">
                        <h1>United Kingdom</h1>
                        <div class="meta">Unit, Correspondent or Special Adviser</div>
                    </div>
                    <div class="col-6-m no-margin">
                        <p class="lead">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus.</p>
                    </div>
                </div>
            </div>

            <div class="page-nav">
                <div class="row">
                    <ul class="anchor-links-list no-margin">
                        <li class="menu-title">Jump to: <i class="icon-menu-1"></i></li>
                        <li><a href="#about-us">About Us <i class="icon-down-open"></i></a></li>
                        <li><a href="#our-team">Our Team <i class="icon-down-open"></i></a></li>
                        <li><a href="#our-location">Our Location <i class="icon-down-open"></i></a></li>
                    </ul>
                </div>
            </div>

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <h4 id="about-us">About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                    <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                    <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                    <h4 id="our-team">Our Team</h4>

                    <h4 id="our-location">Our Location</h4>
                    <div class="row">
                        <div class="col-8-m"><img src="http://placehold.it/700x400&text=Map" alt="Map"/></div>
                        <div class="col-4-m">
                            <address>
                                Address Line 1 <br/>
                                Address Line 2 <br/>
                                Address Line 3 <br/>
                                Address Line 4 <br/>
                            </address>
                        </div>
                    </div>

                    <p>Info on location lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus.</p>

                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary" class="content-area">
                sidebar
            </div><!-- #secondary -->


        </div><!-- #content -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
