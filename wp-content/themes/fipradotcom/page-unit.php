<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    #hero {
        background:url('<?php echo get_template_directory_uri(); ?>/img/tower_bridge_orig.jpg') center no-repeat;
        background-size:cover;
    }
</style>

<div id="content-container" class="with-border">

    <div id="breadcrumbs">
        <div class="breadcrumbs-content">
            <a href="#">Home</a> <span class="divider"><i class="icon-right-open"></i></span> <a href="#">Our Global Network</a> <span class="divider"><i class="icon-right-open"></i></span> <span class="active">United Kingdom</span>
        </div>
    </div>

    <div id="hero" class="full-width-block-container with-content-bar unit">
        <div class="full-width-block-content-container content-bar grey bottom bg-image">
            <div class="full-width-block-content left narrow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/flags/united-kingdom.png" alt="Flag" /> <h1 class="upper no-margin">United Kingdom</h1>
                <p class="meta">Unit, Correspondent or Special Adviser</p>
                <p class="lead no-margin">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus.</p>
            </div>
        </div>
    </div>

    <div class="page-nav">
        <div class="row content-area">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title"><i class="icon-menu-1"></i> Jump to...</li>
                <li class="hide-s"><a class="jump-to-link" href="#about-us">About Us <i class="icon-down-open"></i></a></li>
                <li class="hide-s"><a class="jump-to-link" href="#our-team">Our Team <i class="icon-down-open"></i></a></li>
                <li class="hide-s"><a class="jump-to-link" href="#our-location">Our Location <i class="icon-down-open"></i></a></li>
                <li class="hide-s hide-m"><a class="jump-to-link" href="#get-in-touch">Get in Touch <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
    </div>

    <div id="site-content-container">

        <div id="content" class="site-content">

            <div id="primary">
                <main id="main" class="site-main" role="main">

                    <h3 id="about-us">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis, ligula in ornare malesuada, erat ante gravida augue, non fermentum ligula odio vitae eros. Donec elit purus, tristique sit amet finibus vitae, interdum ut nisi. Nam mattis, lorem volutpat accumsan iaculis, ante justo elementum urna, eget tempor justo lacus quis leo. Pellentesque metus ligula, facilisis eu diam eget, semper maximus lorem. Vivamus fringilla mi vitae risus viverra, ac tempor urna elementum. Duis semper odio quis erat finibus, eget tincidunt est ultrices. Morbi sit amet ante a mauris auctor finibus. Quisque eget risus at ligula egestas dapibus sit amet et enim.</p>

                    <p>Phasellus quis accumsan dolor, eget tempus tortor. Vivamus iaculis massa a nibh pretium, sed interdum dui molestie. Suspendisse non ipsum eu ligula tincidunt vulputate vitae nec metus. Donec maximus sagittis magna, id auctor purus dapibus eu. Vestibulum gravida, libero at aliquet euismod, orci libero consectetur tellus, sit amet mattis velit lorem in velit. Nam quis nisl porta, placerat est in, consectetur dolor. Proin condimentum, nunc a malesuada interdum, neque nisi euismod dui, et luctus felis felis a ligula. Nam maximus lacus vel quam mattis, nec elementum est tempor. Phasellus pulvinar diam sed nisi scelerisque efficitur. Sed fringilla varius dolor, at placerat velit. Duis aliquet convallis ipsum, vel ultrices felis aliquet quis. Aliquam imperdiet magna eget turpis fringilla pellentesque.</p>

                    <p>Vestibulum sed pulvinar orci, efficitur tristique arcu. Fusce a rutrum neque, vel efficitur urna. Vivamus ut iaculis mi. Etiam eget tortor ut metus sagittis semper a at urna. Mauris sit amet lacinia nunc, vestibulum elementum urna. Sed a lorem non leo consequat venenatis mattis a arcu. Sed a sapien malesuada ipsum convallis mattis. Nunc lacinia lorem sit amet urna lacinia placerat. Curabitur cursus mauris vitae nisi vulputate tincidunt. Integer sit amet efficitur neque. Aenean tincidunt imperdiet est sit amet dictum. In tortor augue, tempus nec justo ac, tincidunt blandit lacus. Nullam mi leo, venenatis pretium ipsum ac, iaculis cursus orci.</p>

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
                    <div class="testimonial-group-carousel-controls">
                        <button class="button owl-prev" data-carousel=".testimonial-group">
                            <i class="icon-left-open-2" ></i> Previous
                        </button>
                        <button class="button owl-next" data-carousel=".testimonial-group">
                            Next <i class="icon-right-open-2"></i>
                        </button>
                    </div>


                    <h3 id="our-team">Our Team</h3>

                    <div class="team-group equal-heights">
                        <div class="row-of-1">
                            <div class="team-member">
                                <div class="col-2-m col-12-xs col-12-xxs no-bottom-margin">
                                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" /></a>
                                </div>
                                <div class="col-7-m col-12-xs col-12-xxs no-bottom-margin">
                                    <h4 class="no-margin"><a href="#">Peter-Carlo Lehrell</a></h4>
                                    <h6>Position</h6>
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
                                    <h6>Position</h6>
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

                <div class="sidebar-contacts-container ribbon">
                    <h5 id="get-in-touch">Lead Contact</h5>

                    <div class="sidebar-contacts-group">
                        <div class="sidebar-contact">
                            <div class="sidebar-contact-content">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" style="background-color: white;" />
                                    <strong>Peter-Carlo Lehrell</strong>
                                </a>
                                <p class="no-bottom-margin">
                                    <strong>Chairman, Fipra International</strong><br/>
                            <span class="font-14">Tel. +01234 5678910 <br/>
                            Fax. +01234 5678910 <br/>
                            <a href="mailto:lehrell@fipra.com">lehrell@fipra.com</a></span>
                                </p>
                            </div>
                        </div>

<!--                        <div class="sidebar-contact">-->
<!--                            <div class="sidebar-contact-content">-->
<!--                                <a href="#">-->
<!--                                    <img src="--><?//= get_template_directory_uri(); ?><!--/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" style="background-color: white;" />-->
<!--                                    <strong>Peter-Carlo Lehrell</strong>-->
<!--                                </a>-->
<!--                                <p class="no-bottom-margin">-->
<!--                                    <strong>Chairman, Fipra International</strong><br/>-->
<!--                            <span class="font-14">Tel. +01234 5678910 <br/>-->
<!--                            Fax. +01234 5678910 <br/>-->
<!--                            <a href="mailto:lehrell@fipra.com">lehrell@fipra.com</a></span>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->

                    </div>
                </div>


                <aside>
                    <h5>More Units</h5>
                    <ul class="sidebar-list no-bottom-margin no-bullet">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/france.png" class="sidebar-list-flag" alt="France"/> France</a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/germany.png" class="sidebar-list-flag" alt="Germany"/> Germany</a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/italy.png" class="sidebar-list-flag" alt="Italy"/> Italy</a></li>
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
