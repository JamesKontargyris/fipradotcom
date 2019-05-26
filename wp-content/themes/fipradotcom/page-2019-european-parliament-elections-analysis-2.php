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
                    <h1 class="hero__main-title"><?php echo get_field('main_page_title'); ?></h1>
                </div>
            </div>

            <div class="hero-after">
                <div class="hero__sub-title-container">
                    <h4 class="hero__sub-title"><?php echo get_field('sub_page_title'); ?></h4>
                </div>
                <div class="hero__hashtag-container">
                    <h4 class="hero__hashtag">#28countries<strong>ONEnetwork</strong></h4>
                </div>
            </div>

        </div>

        <div class="ep-election-analysis-report-hero-container">
            <div class="ep-election-analysis-report-hero__mockup-background"> </div>
            <img class="ep-election-analysis-report-hero__report-cover" src="<?php echo get_template_directory_uri(); ?>/img/fipra-election-analysis-report-front-cover.jpg">
            <div class="ep-election-analysis-report-hero__content">
                <div class="ep-election-analysis-report-hero__content__skewed-background"> </div>
                <div class="ep-election-analysis-report-hero__title">Title appears here</div>
                <div class="ep-election-analysis-report-hero__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <a href="#" class="btn primary btn-large btn-white ep-election-analysis-report-hero__button">Download the report</a>
            </div>
        </div>


            <div id="site-content-container">

                <div id="site-content">

                    <div class="ep-election-analysis-tabbed-content">
                        <div class="ep-election-analysis-tabbed-content__tab-group">
                            <a href="#" class="ep-election-analysis-tab" data-target-tab=".ep-election-analysis-tab-content--news-and-analysis">News and Analysis</a>
                            <a href="#" class="ep-election-analysis-tab" data-target-tab=".ep-election-analysis-tab-content--review-back-issues">Previous reviews</a>
                        </div>
                        <div class="ep-election-news-and-analysis-container ep-election-analysis-tab-content ep-election-analysis-tab-content--news-and-analysis">
                            <div class="ep-election-news-and-analysis__content">
                                <h5>News and Analysis will appear here</h5>
                            </div>
                        </div>

                        <div class="ep-election-review-back-issues-container ep-election-analysis-tab-content ep-election-analysis-tab-content--review-back-issues">
                            <div class="ep-election-review-back-issues__content">
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
                    </div>



                </div><!-- #site-content -->
            </div><!-- #site-content-container -->

    </div><!-- #content-container   -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
