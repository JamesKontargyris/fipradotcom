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

    <?php include('inc/header_featured_image.php'); ?>

    <div id="content-container" class="<?= str_replace(' ', '-', strtolower(get_the_title())); ?>">

        <?php include('inc/hero_banner.php'); ?>

        <div id="site-content-container">

            <div id="site-content">

                    <?php get_template_part( 'content', 'page' ); ?>

            </div><!-- #site-content -->
        </div><!-- #site-content-container -->

    </div><!-- #content-container   -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
