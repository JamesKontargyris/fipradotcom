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
                        <li class="hide-s"><a href="#get-in-touch">Get in Touch <i class="icon-down-open"></i></a></li>
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

                    <div class="team-group">
                        <div class="row-of-1">
                            <div class="team-member">
                                <div class="col-2-s col-3-xs col-12-xxs no-bottom-margin">
                                    <img src="<?= get_template_directory_uri(); ?>/img/300.gif" alt="Peter-Carlo Lehrell" />
                                </div>
                                <div class="col-10-s col-9-xs col-12-xxs no-bottom-margin">
                                    <h5><a href="#">Peter-Carlo Lehrell</a></h5>
                                    <div class="team-member-bio">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.
                                            <a href="#">Full&nbsp;profile<i class="icon-right-open"></i></a></p>
                                    </div>
                                    <h6>Expertise</h6>
                                    <ul class="team-member-expertise">
                                        <li><a href="#"><i class="icon-plane"></i></a></li>
                                        <li><a href="#"><i class="icon-industrial-building"></i></a></li>
                                        <li><a href="#"><i class="icon-lightbulb"></i></a></li>
                                        <li><a href="#"><i class="icon-bank"></i></a></li>
                                        <li><a href="#"><i class="icon-monitor"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="col-2-s col-3-xs col-12-xxs no-bottom-margin">
                                    <img src="<?= get_template_directory_uri(); ?>/img/300.gif" alt="Peter-Carlo Lehrell" />
                                </div>
                                <div class="col-10-s col-9-xs col-12-xxs no-bottom-margin">
                                    <h5><a href="#">Peter-Carlo Lehrell</a></h5>
                                    <div class="team-member-bio">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.
                                            <a href="#">Full&nbsp;profile<i class="icon-right-open"></i></a></p>
                                    </div>
                                    <h6>Expertise</h6>
                                    <ul class="team-member-expertise">
                                        <li><a href="#"><i class="icon-plane"></i></a></li>
                                        <li><a href="#"><i class="icon-industrial-building"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h4 id="our-location">Our Location</h4>
                    <div class="row">
                        <div class="col-8-m"><img src="<?= get_template_directory_uri(); ?>/img/600x400.gif" alt="Map Placeholder" /></div>
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
                <h5 id="get-in-touch">Get in Touch</h5>
                <div class="sidebar-contact">
                    <div class="col-12-m col-4-xs col-12-xxs no-bottom-margin">
                        <img src="<?= get_template_directory_uri(); ?>/img/300x150.gif" alt="Peter-Carlo Lehrell" />
                    </div>
                    <div class="col-12-m col-8-xs col-12-xxs no-bottom-margin">
                        <div class="sidebar-contact-content">
                            <h5 class="no-margin"><a href="#">Peter-Carlo Lehrell</a></h5>
                            <p class="sans-serif no-bottom-margin">

                                <strong>Chairman, Fipra International</strong><br/>
                            <span class="font-14">Tel. +01234 5678910 <br/>
                            Fax. +01234 5678910 <br/>
                            <a href="mailto:lehrell@fipra.com">lehrell@fipra.com</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- #secondary -->


        </div><!-- #content -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
