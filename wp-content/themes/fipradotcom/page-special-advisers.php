<?php
/**
 * The template for displaying the Our People page.
 *
 * @package fipradotcom
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<?php include('inc/header_featured_image.php'); ?>

<div id="content-container" class="our-people">

    <?php include('inc/hero_banner.php'); ?>

    <?php the_content(); ?>

    <?php include('inc/special_advisers_filters.php'); ?>

    <?php $fipriots = get_all_spads(); ?>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary" class="full-width">
                <main id="main" class="site-main" role="main">

                    <?php if ( $fipriots->have_posts() ) : ?>

                        <!--                    Used by jQuery to update filtering-on-title when clear filter button is clicked -->
                        <div class="hide-s hide-m number-of-fipriots"><?= $fipriots->found_posts; ?></div>
                        <div class="hide-s hide-m fipriot-type">Special Adviser</div>

                        <div class="filtering-on-container">
                            <h4 class="no-margin filtering-on-title">
                                <?php //echo 'Showing ' . $fipriots->found_posts > 1 ? $fipriots->found_posts . ' Special Advisers' : $fipriots->found_posts . ' Special Adviser' ; ?>
                            </h4>
                            <a href="#" class="btn btn-small secondary clear-filter hide"><i class="icon-cancel-1"></i> Clear Filter</a>
                        </div>


                        <div class="people-group-container">

                            <div class="people-group">

                                <?php while ( $fipriots->have_posts() ) : $fipriots->the_post(); ?>

                                    <?php $post_id = get_the_ID(); ?>
                                    <?php $expertise_area = make_class_name(get_field('special_adviser_expertise')); ?>

                                    <?php
//                                        Assign variables
                                    $first_name = get_field('first_name'); $last_name = get_field('last_name'); $expertise = get_field('special_adviser_expertise');
                                    ?>

                                    <div class="person <?php echo 'expertise-' . trim($expertise_area) . ' surname-' . substr($last_name, 0, 1); ?>">
                                        <div class="person-profile-photo">
                                            <a href="<?php echo get_the_permalink(); ?>">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ) ?>" alt="<?php echo get_field('first_name'); ?> <?php echo get_field('last_name'); ?>" title="<?php echo get_field('first_name'); ?> <?php echo get_field('last_name'); ?>" class="photo-tile" />
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blank_profile_<?php echo get_field('gender'); ?>.png" alt="<?php echo get_field('first_name'); ?> <?php echo get_field('last_name'); ?>" title="<?php echo get_field('first_name'); ?> <?php echo get_field('last_name'); ?>" class="photo-tile" />
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="person-details">
                                            <h4 class="no-margin"><a href="<?= get_the_permalink(); ?>"><?= get_field('first_name'); ?> <?= get_field('last_name'); ?></a></h4>

                                            <h6 class="expertise"> <?php if ($expertise) { echo $expertise; } ?> </h6>

                                            <div class="btn-container">
                                                <a href="<?= get_the_permalink(); ?>" class="btn">
                                                    <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                                </a>
                                            </div>

                                            <div class="person-contact-details">
                                                <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <?php $tel = get_field('tel'); ?>
                                                    <?php if($tel) : ?>
                                                        <tr>
                                                            <td>Tel</td>
                                                            <td><?= get_field('tel') ?></td>
                                                        </tr>
                                                    <?php endif; ?>

                                                    <?php $mobile = get_field('mobile'); ?>
                                                    <?php if($mobile) : ?>
                                                        <tr>
                                                            <td>Mobile</td>
                                                            <td><?= get_field('mobile') ?></td>
                                                        </tr>
                                                    <?php endif; ?>

                                                    <?php $fax = get_field('fax'); ?>
                                                    <?php if($fax) : ?>
                                                        <tr>
                                                            <td>Fax</td>
                                                            <td><?= get_field('fax') ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    <tr>
                                                        <td colspan="2">
                                                            <a href="/contact-fipriot?person=<?php echo get_field('first_name') ?><?php echo get_field('last_name') ?>&fipriot_id=<?php the_ID(); ?>">Contact <?php echo $first_name; ?></a>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <br/><a href="<?= get_the_permalink(); ?>" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            </div>
                        </div>

                    <?php endif; ?>
                    <?php /* Restore original Post Data */ wp_reset_postdata(); ?>

                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- #content -->
    </div><!-- #site-content-container -->

</div><!-- #content-container   -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
