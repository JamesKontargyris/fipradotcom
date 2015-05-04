<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    /*    If dark photo*/
    #page-banner {
        background-image: linear-gradient(to bottom, rgba(0,0,0, 0) 90%, rgba(0,0,0, 0.3) 100%), linear-gradient(to bottom, rgba(0,37,127, 0.6) 50%, rgba(0,37,127, 0.9) 100%), url('<?php echo get_template_directory_uri(); ?>/img/tower_bridge_orig.jpg');
    }
    /*If light photo*/
/*        #page-banner {*/
/*            background-image: linear-gradient(to bottom, rgba(0,0,0, 0) 90%, rgba(0,0,0, 0.3) 100%), linear-gradient(to bottom, rgba(255,255,255, 0.7) 0%, rgba(255,255,255, 0.9) 100%), url('*/<?php //echo get_template_directory_uri(); ?>/*/img/tower_bridge_orig.jpg');*/
/*        }*/
</style>

<div id="content-container" class="with-border">

        <div id="content" class="site-content">

            <div id="page-banner" class="unit">
                <div id="page-banner-content" class="light-text">
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
                    <ul class="anchor-links-list no-margin no-bullet">
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

                    <blockquote cite="http://test.com" class="left">
                        <div class="row">
                            <div class="col-1-m col-2-xs no-bottom-margin">
                                <div class="quotemark">
<!--                                    <i class="icon-quote-1"></i>-->
                                    <img src="<?= get_template_directory_uri(); ?>/img/quotemark.png" alt="''"/>
                                </div>
                                <!--<img src="--><?//= get_template_directory_uri(); ?><!--/img/fipriots/peter-carlo-lehrell.jpg" alt="Peter-Carlo Lehrell" />-->
                            </div>
                            <div class="col-11-m col-10-xs no-bottom-margin">
                                <p>Testimonial with quote mark. Can also feature a photo of the author instead of the quote mark.  Quisque a iaculis nisi. Aliquam porta dolor feugiat eleifend elementum.</p>
                                <footer class="author">
                                    Author Name<br/>Position, Organisation</strong>
                                </footer>
                            </div>
                        </div>
                        <div class="triangle"></div>
                    </blockquote>


                    <h4 id="our-team">Our Team</h4>

                    <div class="team-group">
                        <div class="row-of-1">
                            <div class="team-member">
                                <div class="col-2-m col-12-xs col-12-xxs no-bottom-margin">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell.jpg" alt="Peter-Carlo Lehrell" />
                                </div>
                                <div class="col-7-m col-12-xs col-12-xxs no-bottom-margin">
                                    <h5 class="no-margin"><a href="#">Peter-Carlo Lehrell</a></h5>
                                    <div class="team-member-bio">
                                        <p class="no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. <a href="#">Full&nbsp;profile</a></p>
                                    </div>
                                </div>
                                <div class="col-3-m col-12-xs no-bottom-margin">
                                    <h6>Expertise</h6>
                                    <ul class="team-member-expertise no-bullet">
                                        <li><a href="#" class="tooltip" title="Expertise Title"><i class="icon-plane"></i></a></li>
                                        <li><a href="#" class="tooltip" title="Expertise Title"><i class="icon-industrial-building"></i></a></li>
                                        <li><a href="#" class="tooltip" title="Expertise Title"><i class="icon-lightbulb"></i></a></li>
                                        <li><a href="#" class="tooltip" title="Expertise Title"><i class="icon-bank"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="col-2-m col-12-xs col-12-xxs no-bottom-margin">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola.jpg" alt="Ukko Metsola" />
                                </div>
                                <div class="col-7-m col-12-xs col-12-xxs no-bottom-margin">
                                    <h5 class="no-margin"><a href="#">Ukko Metsola</a></h5>
                                    <div class="team-member-bio">
                                        <p class="no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. <a href="#">Full&nbsp;profile</a></p>
                                    </div>
                                </div>
                                <div class="col-3-m col-12-xs no-bottom-margin">
                                    <h6>Expertise</h6>
                                    <ul class="team-member-expertise no-bullet">
                                        <li><a href="#" class="tooltip" title="Expertise Title"><i class="icon-plane"></i></a></li>
                                        <li><a href="#" class="tooltip" title="Expertise Title"><i class="icon-industrial-building"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h4 id="our-location">Our Location</h4>
                    <div class="row">
                        <div class="col-7-m"><img src="<?= get_template_directory_uri(); ?>/img/600x400.gif" alt="Map Placeholder" /></div>
                        <div class="col-5-m">
                            <address>
                                Address Line 1 <br/>
                                Address Line 2 <br/>
                                Address Line 3 <br/>
                                Address Line 4 <br/>
                            </address>
                        </div>
                    </div>

                    <p><em>Info on location lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus.</em></p>

                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary" class="content-area">
                <aside>
                    <h5 id="get-in-touch">Lead Contact</h5>
                    <div class="row">
                        <div class="sidebar-contact">
                            <div class="sidebar-contact-content">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell.jpg" alt="Peter-Carlo Lehrell" />
                                    <h5 class="no-margin">Peter-Carlo Lehrell</h5>
                                </a>
                                <p class="no-bottom-margin">
                                    <strong>Chairman, Fipra International</strong><br/>
                                    <span class="font-14">Tel. +01234 5678910 <br/>
                                    Fax. +01234 5678910 <br/>
                                    <a href="mailto:lehrell@fipra.com">lehrell@fipra.com</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </aside>

                <aside>
                    <h5>More Units</h5>
                    <ul class="sidebar-list no-bottom-margin no-bullet">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/france.png" class="sidebar-list-flag" alt="France"/> <strong class="black">France</strong></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/germany.png" class="sidebar-list-flag" alt="Germany"/> <strong class="black">Germany</strong></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/italy.png" class="sidebar-list-flag" alt="Italy"/> <strong class="black">Italy</strong></a></li>
                    </ul>
                    <a href="#"><small>Explore our Global Network <i class="icon-right-open"></i></small></a>
                </aside>

                <aside>
                    <h5>Sidebar title</h5>
                    <p>More sidebar blocks can be added here, controlled in the CMS.</p>
                </aside>
            </div><!-- #secondary -->


        </div><!-- #content -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
