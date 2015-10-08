<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fipradotcom
 */
?>

<?php if(get_post_type() == 'fipriot') : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row search-result-row">

            <div class="col-1-m hide-s">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' )[0]; ?>" alt="<?= full_name(); ?>" title="<?= full_name(); ?>" class="photo-tile"/>
                <?php endif; ?>
            </div>
            <div class="col-5-m">
                <?php the_title( sprintf( '<h3 class="no-margin"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                    <?php if(get_field('is_special_adviser')) : ?>
                        <h5>Special Adviser<?= get_field('special_adviser_expertise') ? ', ' . get_field('special_adviser_expertise') : ''; ?></h5>
                    <?php else : ?>
                        <h5><?= get_field('position'); ?><?= get_field('unit') ? ', ' . get_field('unit')->post_title : ''; ?></h5>
                    <?php endif; ?>
            </div>

            <div class="col-6-m hide-s">
                <?= get_field('short_bio'); ?>
            </div>

        </div>

    </article>

<?php elseif(get_post_type() == 'expertise') : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row search-result-row">

            <div class="col-1-m hide-s" style="fill:grey">
                <?= file_get_contents(get_field('icon')); ?>
            </div>
            <div class="col-5-m">
                <?php the_title( sprintf( '<h3 class="no-margin"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                <h5>Area of Expertise</h5>
            </div>

            <div class="col-6-m hide-s">
                <?= get_field('short_summary'); ?>
            </div>

        </div>

    </article>

<?php elseif(get_post_type() == 'unit') : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row search-result-row">

            <div class="col-1-m hide-s">
                <?php if ( get_field('flag') ) : ?>
                    <img src="<?= get_field('flag')['url']; ?>" alt="<?= get_the_title(); ?>" title="<?= get_the_title(); ?>"/>
                <?php endif; ?>
            </div>
            <div class="col-5-m">
                <?php the_title( sprintf( '<h3 class="no-margin"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                <h5>Fipra Unit</h5>
            </div>

            <div class="col-6-m hide-s">
                <?= get_field('introduction'); ?>
            </div>

        </div>

    </article>

<?php else : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row search-result-row">

            <div class="col-6-m">
                <?php the_title( sprintf( '<h3 class="no-margin"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            </div>

            <div class="col-6-m hide-s">
                <?= get_field('header_introduction'); ?>
            </div>

        </div>

    </article>

<?php endif; ?>