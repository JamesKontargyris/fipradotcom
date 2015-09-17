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

    <?php if(has_post_thumbnail()) : ?>
        <style>
            #hero {
                content:"";
                background:url('<?= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'banner' )[0]; ?>') <?= str_replace('_', ' ', get_field('bg_position')); ?> no-repeat;
                background-size:cover;
            }
        </style>
    <?php endif; ?>

    <div id="content-container">

        <div id="hero" class="full-width-block-container<?= has_post_thumbnail() ? ' with-content-bar' : ''; ?>">
<!--            Set the content block height using the header_text_block_height field. If a featured image is set, override this height with the content-bar class-->
            <div class="full-width-block-content-container <?= get_field('header_text_block_height'); ?> <?= has_post_thumbnail() ? 'content-bar bg-image' : ''; ?>  grey">
                <div class="full-width-block-content <?= get_field('header_text_location'); ?> narrow">
                    <h1 class="upper"><?php the_title(); ?></h1>
                    <p class="lead no-margin"><?= get_field('header_introduction'); ?></p>
                </div>
            </div>
        </div>

        <div id="site-content-container">

            <div id="site-content">

                    <?php get_template_part( 'content', 'page' ); ?>

            </div><!-- #site-content -->
        </div><!-- #site-content-container -->

    </div><!-- #content-container   -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
