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
        background-image: linear-gradient(to bottom, rgba(125, 125, 125, 0) 94%, rgba(125, 125, 125, 0.2) 100%), url('<?php echo get_template_directory_uri(); ?>/img/fipriots/ukko_metsola.gif'), linear-gradient(rgba(255, 255, 255, 0.85) 0%, rgba(255, 255, 255, 0) 100%), url('<?php echo get_template_directory_uri(); ?>/img/grey_@2X.png');

    }

</style>

<div id="content-container" class="with-border">

        <div id="content" class="site-content">

            <div id="page-banner" class="profile">
                <div id="page-banner-content" class="dark-text">
                    <div class="profile-header-content">
                        <h1>Ukko Metsola</h1>
                        <h2>Account Director, Fipra International</h2>
                        <a class="btn primary" href="#">Contact Ukko</a>
                    </div>
                </div>
            </div>

            <div id="secondary" class="content-area">
                <aside>
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
                    <h5>Languages Spoken</h5>
                    <ul class="languages-list no-bottom-margin">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/Finland.png" class="languages-list-flag tooltip" alt="Finnish" title="Finnish"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/United-Kingdom.png" class="languages-list-flag tooltip" alt="English" title="English"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/Sweden.png" class="languages-list-flag tooltip" alt="Swedish" title="Swedish"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/France.png" class="languages-list-flag tooltip" alt="French" title="French"/></li>
                    </ul>
                </aside>

            </div><!-- #secondary -->

            <div id="primary" class="content-area profile-content-area">
                <main id="main" class="site-main" role="main">

                    <p class="lead"> Ukko is a Senior Adviser at Fipra International and a Director at Fipra Finland. </p>
                    <p>Ukko has a diverse and in-depth knowledge of both the EU and Finnish institutions due to his political and academic work since Finland joined the Union in 1995.</p>
                    <p>He has worked as an International Secretary in the Finnish Parliament and as a Senior Adviser in the Prime Minister’s Office in Finland. Prior to joining Fipra in 2005, Ukko completed a graduate degree at the Harvard Kennedy School (with Fulbright scholarship). Ukko contested the last European Parliament elections in Finland in June 2009 for the liberal conservative National Coalition Party.</p>
                    <p>Ukko is married with three sons and speaks fluent Finnish and English, good Swedish, and some French.</p>

                    <blockquote cite="http://test.com" class="right">
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

                    <h4>Ukko's Expertise</h4>

                    <div class="showcase profile-expertise-showcase equal-heights">
                        <div class="row-of-4">
                            <div class="showcase-block bg blue center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-lightbulb"></i></div>
                                        <h3>Energy and Environment</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="showcase-block bg blue center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-industrial-building"></i></div>
                                        <h3>Chemical, Industrials and Mining</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="showcase-block bg blue center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-plane"></i></div>
                                        <h3>Travel, Transport and Logistics</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="showcase-block bg blue center">
                                <a href="#">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-bank"></i></div>
                                        <h3>Banking and Financial Services</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- #content -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
