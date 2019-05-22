<?php
/**
 * The template for displaying pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package fipradotcom
 */


get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('inc/breadcrumbs'); ?>

    <div id="content-container" class="<?= str_replace(' ', '-', strtolower(get_the_title())); ?> ep-election-analysis">

        <div class="hero-container">

            <div class="hero__grey-block"> </div>
            <img class="hero__ep-logo" src="<?php echo get_template_directory_uri(); ?>/img/ep-logo-white.png" alt="European Parliament Logo">

            <div class="hero">
                <div class="hero__background-block"> </div>

                <div class="hero__main-title-container">
                    <h1 class="hero__main-title">2019 European Parliament Elections</h1>
                </div>
            </div>

            <div class="hero-after">
                <div class="hero__sub-title-container">
                    <h4 class="hero__sub-title">The Fipra Pan-EU Analysis</h4>
                </div>
                <div class="hero__hashtag-container">
                    <h4 class="hero__hashtag">#28countries<strong>ONEnetwork</strong></h4>
                </div>
            </div>

        </div>


            <div id="site-content-container">

                <div id="site-content">

                    <div class="row">
                        <div class="col-4">
                            <div class="ballot-box-icon-container">
                                <img class="ballot-box-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/ballot-box.png" alt="Ballot Box icon">
                            </div>
                            <h2 class="lead-para">Fipra is getting ready for the European Parliament elections 2019</h2>
                        </div>
                        <div class="col-8">
                            <p>The upcoming European Parliament elections are set to drastically change EU politics. The rise of new political and populist are set to break the previous hold of the European centre-right and Socialist groups over the European Parliament and lead to greater political fragmentation. This in turn is likely to impact not only on the appointment of the new European Commission President, but also lead to political uncertainty and shifting power dynamics in the implementation of new EU policies for the 2019-2024 political cycle.</p>

                            <p>In short, 2019 is likely to be a year of change for the EU, with new political forces on the rise, Brexit and a revamped nationalist sentiment all expected to change the way the EU works. How will this evolving political landscape affect the EU’s 2019-2024 priorities? How well are businesses and other organisations prepared for this change ?</p>

                            <p>Fipra will be following the election results closely and we will be compiling a full country-by-country analysis of both the outcome of the elections and their implications. For more information, please contact us on: [ enter contact point email ]</p>
                        </div>
                    </div>

                    <div class="ep-election-review-back-issues-container">
                        <div class="ep-election-review-back-issues__content">
                            <h3 class="ep-election-review-back-issues__title">Fipra European Elections Review</h3>
                            <h5>Download back issues</h5>
                            <ul class="ep-election-review-back-issues__gallery">
                                <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_may_2019.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> May 2019</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_april_2019.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> April 2019</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_january_2019.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> January 2019</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_november_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> November 2018</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_october_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> October 2018</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_september_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> September 2018</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_july_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> July 2018</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- #site-content -->
            </div><!-- #site-content-container -->

    </div><!-- #content-container   -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
