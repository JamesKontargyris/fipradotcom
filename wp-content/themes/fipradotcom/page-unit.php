<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    /*    If dark photo*/
    #page-banner:before {
        content:"";
        background:url('<?php echo get_template_directory_uri(); ?>/img/tower_bridge_orig.jpg') center no-repeat;
        background-size:cover;
        position:absolute;
        top:0; left: 0; bottom: 0; right: 0;
        z-index:-1;
    }
    /*If light photo*/
/*        #page-banner {*/
/*            background-image: linear-gradient(to bottom, rgba(0,0,0, 0) 90%, rgba(0,0,0, 0.3) 100%), linear-gradient(to bottom, rgba(255,255,255, 0.7) 0%, rgba(255,255,255, 0.9) 100%), url('*/<?php //echo get_template_directory_uri(); ?>/*/img/tower_bridge_orig.jpg');*/
/*        }*/
</style>

<div id="content-container" class="with-border">

        <div id="page-banner" class="full-width-block-container unit grey">
            <div class="full-width-block-content">
                <div class="col-8-l no-margin">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flags/united-kingdom.png" alt="Flag" /> <h1 class="upper">United Kingdom</h1>
                    <p class="meta">Unit, Correspondent or Special Adviser</p>
                    <p class="lead">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus.</p>
                </div>
            </div>
        </div>

        <div class="page-nav">
            <div class="row content-area">
                <ul class="anchor-links-list no-margin no-bullet">
                    <li class="menu-title">Jump to... <i class="icon-menu-1"></i></li>
                    <li><a class="jump-to-link" href="#about-us">About Us <i class="icon-down-open"></i></a></li>
                    <li><a class="jump-to-link" href="#our-team">Our Team <i class="icon-down-open"></i></a></li>
                    <li><a class="jump-to-link" href="#our-location">Our Location <i class="icon-down-open"></i></a></li>
                    <li class="hide-s"><a href="#get-in-touch">Get in Touch <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
        </div>

    <div id="site-content-container">

        <div id="content" class="site-content">

            <div id="primary">
                <main id="main" class="site-main" role="main">

                    <h3 id="about-us">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                    <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus. Nulla consequat volutpat augue a elementum.</p>

                    <p>Aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus. Integer vitae felis egestas, sodales eros ut, luctus erat.</p>

                    <h3 id="testimonials">Testimonials <i class="icon-left-open owl-prev" data-carousel=".testimonial-group"></i><i class="icon-right-open owl-next" data-carousel=".testimonial-group"></i></h3>
                    <div class="testimonial-group">
                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Testimonial number 1 Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada. Fusce eget orci convallis, finibus nunc vel, sagittis nibh. Donec eu gravida est. Aliquam vulputate felis augue."
                            </div>
                            <footer class="author">
                                <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                                    <span class="triangle"></span>
                        </blockquote>
                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Testimonial number 2 Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada. Fusce eget orci convallis, finibus nunc vel, sagittis nibh. Donec eu gravida est. Aliquam vulputate felis augue. Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada."
                            </div>
                            <footer class="author">
                                <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                            <span class="triangle"></span>
                        </blockquote>
                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Testimonial number 3 Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada. Fusce eget orci convallis, finibus nunc vel, sagittis nibh. Donec eu gravida est. Aliquam vulputate felis augue."
                            </div>
                            <footer class="author">
                                <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                            <span class="triangle"></span>
                        </blockquote>
                    </div>


                    <h3 id="our-team">Our Team</h3>

                    <div class="team-group equal-heights">
                        <div class="row-of-1">
                            <div class="team-member">
                                <div class="col-2-m col-12-xs col-12-xxs no-bottom-margin">
                                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" /></a>
                                </div>
                                <div class="col-7-m col-12-xs col-12-xxs no-bottom-margin">
                                    <h4><a href="#">Peter-Carlo Lehrell</a></h4>
                                    <div class="team-member-bio">
                                        <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. <a href="#">Full&nbsp;profile</a></p>
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
                                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt="Ukko Metsola" style="background-color:white;" /></a>
                                </div>
                                <div class="col-7-m col-12-xs col-12-xxs no-bottom-margin">
                                    <h4 class="no-margin"><a href="#">Ukko Metsola</a></h4>
                                    <div class="team-member-bio">
                                        <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. <a href="#">Full&nbsp;profile</a></p>
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


                    <h3 id="our-location">Our Location</h3>
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

            <div id="secondary">
                <aside>
                    <h5 id="get-in-touch">Lead Contact</h5>
                    <div class="row">
                        <div class="sidebar-contact">
                            <div class="sidebar-contact-content">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" style="background-color: white;" />
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
    </div><!-- #site-content-container -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
