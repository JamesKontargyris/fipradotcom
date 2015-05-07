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
        background-image: linear-gradient(to bottom, rgba(0,0,0, 0) 90%, rgba(0,0,0, 0.3) 100%), linear-gradient(to bottom, rgba(69,76,92, 0.8) 0%, rgba(69,76,92, 0.9) 100%), url('<?php echo get_template_directory_uri(); ?>/img/plane.jpg');
    }
    /*If light photo*/
/*    #page-banner {*/
/*        background-image: linear-gradient(to bottom, rgba(0,0,0, 0) 90%, rgba(0,0,0, 0.3) 100%), linear-gradient(to bottom, rgba(255,255,255, 0.7) 0%, rgba(255,255,255, 0.9) 100%), url('*/<?php //echo get_template_directory_uri(); ?>/*/img/plane.jpg');*/
/*    }*/
</style>

<div id="content-container" class="with-border">

<!--        <div class="hero-banner-gradient gradient-center dark-image">-->

<!--            <div class="hero-banner-container">-->
<!--                <div class="hero-banner center light-text expertise">-->
<!--                    <div class="circle-icon"><i class="icon-plane"></i></div>-->
<!--                    <h1>Travel, Transportation and Logistics</h1>-->
<!--                    <p class="lead">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus.</p>-->
<!--                </div>-->
<!--            </div>-->

            <div id="content" class="site-content">

                            <div id="page-banner" class="expertise">
                                <div id="page-banner-content" class="light-text">
                                    <div class="icon-tab">
                                        <i class="icon-plane"></i>
                                        <div class="triangle"></div>
                                    </div>
                                    <div class="circle-icon-outline">
                                        <i class="icon-plane"></i>
                                    </div>
                                    <div>
                                        <h1>Travel, Transportation and Logistics</h1>
                                        <p class="lead no-bottom-margin">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus.</p>
                                    </div>
                                </div>
                            </div>

                <div id="primary" class="content-area expertise-content-area">
                    <main id="main" class="site-main" role="main">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                        <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                        <h4>Section title</h4>

                        <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                        <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                        <h4>Section title</h4>

                        <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                        <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>


                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary" class="content-area">
                    <aside>
                        <h5 id="get-in-touch">Lead Contact</h5>

                        <div class="row">
                            <div class="sidebar-contact">
                                <div class="sidebar-contact-content">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" style="background-color: white"/>
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
                        <h5>Sidebar title</h5>
                        <p>More sidebar blocks can be added here, controlled in the CMS.</p>
                    </aside>

                </div><!-- #secondary -->

                <div id="page-footer">
                    <div class="content-area">
                        <h2 class="center white">Our Expertise</h2>
                        <div class="col-1-m no-bottom-margin carousel-control left owl-prev"><i class="icon-angle-circled-left"></i></div>
                        <div class="col-10-m col-12-xs no-bottom-margin">
                            <div class="showcase profile-expertise-showcase equal-heights">
                                <div id="expertise-carousel">
                                    <div class="showcase-block bg center">
                                        <a href="#">
                                            <div class="showcase-block-content">
                                                <div class="circle-icon"><i class="icon-lightbulb"></i></div>
                                                <h3>Energy and Environment</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="showcase-block bg center">
                                        <a href="#">
                                            <div class="showcase-block-content">
                                                <div class="circle-icon"><i class="icon-industrial-building"></i></div>
                                                <h3>Chemical, Industrials and Mining</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="showcase-block bg center">
                                        <a href="#">
                                            <div class="showcase-block-content">
                                                <div class="circle-icon"><i class="icon-plane"></i></div>
                                                <h3>Travel, Transport and Logistics</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="showcase-block bg center">
                                        <a href="#">
                                            <div class="showcase-block-content">
                                                <div class="circle-icon"><i class="icon-bank"></i></div>
                                                <h3>Banking and Financial Services</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="showcase-block bg center">
                                        <a href="#">
                                            <div class="showcase-block-content">
                                                <div class="circle-icon"><i class="icon-lightbulb"></i></div>
                                                <h3>Energy and Environment 2</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="showcase-block bg center">
                                        <a href="#">
                                            <div class="showcase-block-content">
                                                <div class="circle-icon"><i class="icon-industrial-building"></i></div>
                                                <h3>Chemical, Industrials and Mining 2</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-buttons">
                        <div class="col-1-m no-bottom-margin carousel-control right owl-next"><i class="icon-angle-circled-right"></i></div>

                        </div>
                    </div>
                </div>

            </div><!-- #content -->
<!--        </div><!-- .hero-banner-gradients -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
