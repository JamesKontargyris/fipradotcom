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
        background-image: linear-gradient(to bottom, rgba(0,0,0, 0) 90%, rgba(0,0,0, 0.3) 100%), linear-gradient(to bottom, rgba(69,76,92, 0.8) 0%, rgba(69,76,92, 0.9) 100%), url('<?php echo get_template_directory_uri(); ?>/img/careers.jpg');
    }
    /*If light photo*/
/*    #page-banner {*/
/*        background-image: linear-gradient(to bottom, rgba(0,0,0, 0) 90%, rgba(0,0,0, 0.2) 100%), linear-gradient(to bottom, rgba(255,255,255, 0.7) 0%, rgba(255,255,255, 0.9) 100%), url('*/<?php //echo get_template_directory_uri(); ?>/*/img/careers.jpg');*/
/*    }*/
</style>

<div id="content-container" class="with-border">

            <div id="content" class="site-content">

                <div id="page-banner" class="careers">
                    <div id="page-banner-content" class="light-text">
                        <div>
                            <h1 class="no-margin">Careers with Fipra</h1>
<!--                            <p class="lead no-bottom-margin">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus.</p>-->
                        </div>
                    </div>
                </div>

                <div id="primary" class="content-area careers-content-area">
                    <main id="main" class="site-main" role="main">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                        <h4>4 Jobs Available</h4>

                        <div class="job-listing-block">
                            <div class="row">
                                <div class="col-8-m no-margin">
                                    <div class="job-listing-title"><a href="/job-listing">Account Executive</a></div>
                                    <div class="job-listing-meta">Fipra International | €25,000-€30,000 per annum</div>
                                </div>
                                <div class="col-4-m no-margin">
                                    <div class="job-listing-timestamp">Posted: <strong>30 April 2015</strong><br/>Closes: <strong>10 May 2015</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="job-listing-overview">
                                        <p>Job overview lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi.
                                    </div>
                            </div>
                        </div>

                        <div class="job-listing-block">
                            <div class="row">
                                <div class="col-8-m no-margin">
                                    <div class="job-listing-title"><a href="/job-listing">Another Job Title</a></div>
                                    <div class="job-listing-meta">Fipra International | €25,000-€30,000 per annum</div>
                                </div>
                                <div class="col-4-m no-margin">
                                    <div class="job-listing-timestamp">Posted: <strong>30 April 2015</strong><br/>Closes: <strong>10 May 2015</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="job-listing-overview">
                                    <p>Job overview lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi.
                                </div>
                            </div>
                        </div>

                        <div class="job-listing-block">
                            <div class="row">
                                <div class="col-8-m no-margin">
                                    <div class="job-listing-title"><a href="/job-listing">Another Job Title</a></div>
                                    <div class="job-listing-meta">Fipra International | €25,000-€30,000 per annum</div>
                                </div>
                                <div class="col-4-m no-margin">
                                    <div class="job-listing-timestamp">Posted: <strong>30 April 2015</strong><br/>Closes: <strong>10 May 2015</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="job-listing-overview">
                                    <p>Job overview lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi.
                                </div>
                            </div>
                        </div>

                        <div class="job-listing-block">
                            <div class="row">
                                <div class="col-8-m no-margin">
                                    <div class="job-listing-title"><a href="/job-listing">Another Job Title</a></div>
                                    <div class="job-listing-meta">Fipra International | €25,000-€30,000 per annum</div>
                                </div>
                                <div class="col-4-m no-margin">
                                    <div class="job-listing-timestamp">Posted: <strong>30 April 2015</strong><br/>Closes: <strong>10 May 2015</strong></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="job-listing-overview">
                                    <p>Job overview lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi.
                                </div>
                            </div>
                        </div>

                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary" class="content-area">

                    <aside>
                        <h5>Connect with us</h5>
                        <ul class="sidebar-list no-bottom-margin no-bullet">
                            <li><a href="#"><i class="icon-twitter"></i> <strong class="black">Twitter</strong></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i> <strong class="black">LinkedIn</strong></a></li>
                        </ul>
                    </aside>

                    <aside>
                        <h5 id="get-in-touch">Working for Fipra</h5>

                        <blockquote cite="http://test.com" class="right no-margin">
                            <div class="row">
                                <div class="col-12-m col-10-xs no-bottom-margin">
                                    <p>Testimonial quisque a iaculis nisi. Aliquam porta dolor feugiat eleifend elementum.</p>
                                    <footer class="author">
                                        Author Name<br/>Position, Organisation</strong>
                                    </footer>
                                </div>
                            </div>
                            <div class="triangle"></div>
                        </blockquote>

                        <a href="#"><small>Read more testimonials <i class="icon-right-open"></i></small></a>
                    </aside>

                    <aside>
                        <h5>Sidebar title</h5>
                        <p>More sidebar blocks can be added here, controlled in the CMS.</p>
                    </aside>

                </div><!-- #secondary -->


            </div><!-- #content -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
