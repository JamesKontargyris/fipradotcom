<?php
/**
 * The template for displaying the Our People page.
 *
 * @package fipradotcom
 */

get_header(); ?>

<?php include('inc/header_featured_image.php'); ?>

<div id="content-container" class="our-people">

    <?php include('inc/hero_banner.php'); ?>
    <?php include('inc/our_people_filters.php'); ?>

    <?php $fipriots = get_all_fipriots(); ?>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary" class="full-width">
                <main id="main" class="site-main" role="main">

                    <?php if ( $fipriots->have_posts() ) : ?>

                        <!--                    Used by jQuery to update filtering-on-title when clear filter button is clicked -->
                        <div class="hide-s hide-m number-of-fipriots"><?php echo $fipriots->found_posts; ?></div>
                        <div class="hide-s hide-m fipriot-type">Fipriot</div>

                        <div class="filtering-on-container">
                            <h4 class="no-margin filtering-on-title">
                                Showing <?php echo $fipriots->found_posts > 1 ? $fipriots->found_posts . ' Fipriots' : $fipriots->found_posts . ' Fipriot' ; ?>
                            </h4>
                            <a href="#" class="btn btn-small secondary clear-filter hide"><i class="icon-cancel-1"></i> Clear Filter</a>
                        </div>


                        <div class="people-group-container">

                            <div class="people-group">

                                <?php while ( $fipriots->have_posts() ) : $fipriots->the_post(); ?>

                                    <?php $post_id = get_the_ID(); ?>
<!--                                    Get unit ID and filter class names-->
                                    <?php $unit_id = get_field('unit') ? get_field('unit')->ID : 0; ?>
                                    <?php $unit_filter_name = make_class_name(get_the_title($unit_id)); ?>
                                    <?php $expertise_filter_names = ''; ?>
                                    <?php if($expertise_areas = get_field('expertise')) : ?>
                                        <?php foreach($expertise_areas as $expertise) {
                                            $expertise_filter_names .= make_class_name($expertise->post_name) . ' ';
                                        } ?>
                                    <?php endif; ?>

                                    <div class="person <?php echo trim($unit_filter_name) . ' ' . trim($expertise_filter_names); ?>">
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
                                            <h4 class="no-margin"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_field('first_name'); ?> <?php echo get_field('last_name'); ?></a></h4>

                                            <h6><?php echo get_field('position'); echo $unit_id ? ', ' . get_the_title($unit_id) : ''; ?></h6>
                                            <div class="btn-container">
                                                <a href="<?php echo get_the_permalink(); ?>" class="btn">
                                                    <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                                </a>
                                            </div>
                                            <div class="person-contact-details">
                                                <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <?php $tel = get_field('tel'); ?>
                                                    <?php if($tel) : ?>
                                                        <tr>
                                                            <td>Tel</td>
                                                            <td><?php echo get_field('tel') ?></td>
                                                        </tr>
                                                    <?php endif; ?>

                                                    <?php $mobile = get_field('mobile'); ?>
                                                    <?php if($mobile) : ?>
                                                        <tr>
                                                            <td>Mobile</td>
                                                            <td><?php echo get_field('mobile') ?></td>
                                                        </tr>
                                                    <?php endif; ?>

                                                    <?php $fax = get_field('fax'); ?>
                                                    <?php if($fax) : ?>
                                                        <tr>
                                                            <td>Fax</td>
                                                            <td><?php echo get_field('fax') ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    <tr>
                                                        <td colspan="2">
                                                            <!--TODO update contact form link-->
                                                            <a href="#">Email <?php echo get_field('first_name'); ?></a>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <br/><a href="<?php echo get_the_permalink(); ?>" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
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

<?php get_footer(); ?>
