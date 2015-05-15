<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<div id="content-container" class="with-border">

    <div id="breadcrumbs">
        <div class="breadcrumbs-content">
            <a href="#">Home</a> <span class="divider"><i class="icon-right-open"></i></span> <a href="#">Our People</a> <span class="divider"><i class="icon-right-open"></i></span> <span class="active">Ukko Metsola</span>
        </div>
    </div>

    <div id="hero" class="full-width-block-container with-content-bar content-bar-bottom profile">
        <div class="full-width-block-content-container content-bar grey">
            <div class="full-width-block-content left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fipriots/ukko_metsola_blue.gif" alt="Ukko Metsola"/>
                <h1 class="upper no-margin">Ukko Metsola</h1>
                <h4 class="no-top-margin">Account Director, Fipra International</h4>
                <a class="btn primary" href="#">Contact Ukko</a>
            </div>
        </div>
    </div>

    <div class="page-nav">
        <div class="row content-area">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title menu-title-toggle"><i class="icon-menu-1"></i> Jump to...</li>
                <li class="hide-s"><a class="jump-to-link" href="#testimonials">Testimonials <i class="icon-down-open"></i></a></li>
                <li class="hide-s"><a class="jump-to-link" href="#expertise">Ukko's Expertise <i class="icon-down-open"></i></a></li>
                <li class="hide-s hide-m"><a class="jump-to-link" href="#contact">Contact Ukko <i class="icon-down-open"></i></a></li>
                <li class="hide-s hide-m"><a class="jump-to-link" href="#languages">Languages Spoken <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
    </div>

    <div id="site-content-container">

        <div id="content" class="site-content">

            <div id="primary" class="profile-content-area">
                <main id="main" class="site-main" role="main">

                    <p class="lead"> Ukko is a Senior Adviser at Fipra International and a Director at Fipra Finland.</p>
                    <p>Ukko has a diverse and in-depth knowledge of both the EU and Finnish institutions due to his political and academic work since Finland joined the Union in 1995. He has worked as an International Secretary in the Finnish Parliament and as a Senior Adviser in the Prime Minister’s Office in Finland.</p>
                    <p>Prior to joining Fipra in 2005, Ukko completed a graduate degree at the Harvard Kennedy School (with Fulbright scholarship). He contested the last European Parliament elections in Finland in June 2009 for the liberal conservative National Coalition Party.</p>
                    <p>Ukko speaks fluent Finnish and English, good Swedish, and some French.</p>

                    <div id="testimonials" class="testimonial-group">
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
                    </div>

                    <h3 id="expertise">Ukko's Expertise</h3>

                    <div class="showcase profile-expertise-showcase equal-heights">
                        <div class="row-of-4">
                            <div class="showcase-block bg center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon blue small"><i class="icon-lightbulb"></i></div>
                                        <h3>Energy and Environment</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="showcase-block bg center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon blue small"><i class="icon-industrial-building"></i></div>
                                        <h3>Chemical, Industrials and Mining</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="showcase-block bg center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon blue small"><i class="icon-plane"></i></div>
                                        <h3>Travel, Transport and Logistics</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="showcase-block bg center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon blue small"><i class="icon-bank"></i></div>
                                        <h3>Banking and Financial Services</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary">
                <aside>
                    <h5 id="contact">Contact Ukko</h5>
                    <div class="row">
                        <div class="col-6-xs col-12-xxs no-bottom-margin">
                            <address>
                                Fipra International <br/>
                                Rue de la Loi 227 <br/>
                                Brussels <br/>
                                1040 <br/>
                                Belgium
                            </address>
                        </div>
                        <div class="col-6-xs col-12-xxs no-bottom-margin">
                            <address class="no-bottom-margin">
                                <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td>Tel</td>
                                        <td>+32 2 613 2828</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td>+32 485 846 088</td>
                                    </tr>
                                    <tr>
                                        <td>Fax</td>
                                        <td>+32 2 613 2849</td>
                                    </tr>
                                </table>
                                <a href="mailto:ukko.metsola@fipra.com">ukko.metsola@fipra.com</a>
                            </address>
                        </div>
                    </div>
                </aside>

                <aside>
                    <h5 id="languages">Languages Spoken</h5>
                    <ul class="languages-list no-bottom-margin no-bullet">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/finland.png" class="languages-list-flag tooltip" alt="Finnish" title="Finnish"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/united-kingdom.png" class="languages-list-flag tooltip" alt="English" title="English"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/sweden.png" class="languages-list-flag tooltip" alt="Swedish" title="Swedish"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/france.png" class="languages-list-flag tooltip" alt="French" title="French"/></li>
                    </ul>
                </aside>

            </div><!-- #secondary -->

        </div><!-- #content -->
    </div>
</div><!-- #content-container   -->

<?php get_footer(); ?>
