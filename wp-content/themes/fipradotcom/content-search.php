<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fipradotcom
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row search-result-row">

        <div class="col-5-m">
            <?php the_title( sprintf( '<h3 class="no-margin"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            <h5><?= get_post_type(); ?></h5>
        </div>

        <div class="col-7-m">
            <?php the_excerpt(); ?>
        </div>

    </div>

</article>
