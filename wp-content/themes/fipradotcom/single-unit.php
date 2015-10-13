<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<!-- The Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('inc/breadcrumbs'); ?>

    <?php include('inc/header_featured_image.php'); ?>

    <div id="content-container" class="unit">

        <?php include('inc/hero_banner.php'); ?>

        <div class="page-nav">
            <div class="row content-area">
                <ul class="anchor-links-list no-margin no-bullet">
                    <li class="menu-title menu-title-toggle"><i class="icon-menu-1"></i> Jump to...</li>
                    <li class="hide-s"><a class="jump-to-link" href="#about-us">About Us <i class="icon-down-open"></i></a></li>
                    <li class="hide-s"><a class="jump-to-link" href="#our-location">Our Location <i class="icon-down-open"></i></a></li>
                    <?php if( get_field('team') ) : ?>
                        <li class="hide-s"><a class="jump-to-link" href="#our-team">Our Team <i class="icon-down-open"></i></a></li>
                    <?php endif; ?>
                    <li class="hide-s hide-m"><a class="jump-to-link" href="#get-in-touch">Get in Touch <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
        </div>

        <div id="site-content-container">

            <div id="site-content">

                <div id="primary">
                    <main id="main" class="site-main" role="main">

                        <h3 id="about-us">About Us</h3>

                        <?php if(get_field('translation_available')) : ?>
                            <h5 class="about-us-toggle">
                                <a href="#" class="btn secondary btn-extra-small hide" id="view-original-about-us"><?php echo get_field('original_about_us_label'); ?></a> <a href="#" class="btn secondary btn-extra-small" id="view-translated-about-us"><?php echo get_field('translated_about_us_label'); ?></a>
                            </h5>
                        <?php endif; ?>

                        <div class="about-us-text">

                            <div class="original-about-us">
                                <?php echo get_field('about_us'); ?>
                            </div>

                            <?php if(get_field('translation_available')) : ?>
                                <div class="translated-about-us hide">
                                    <?php echo get_field('translated_about_us'); ?>
                                </div>
                            <?php endif; ?>

                        </div>



                        <section class="our-location">
                            <h3 id="our-location">Our Location</h3>

                            <div class="row">
                                <div class="col-8-m">
                                    <!--Google Map-->
                                    <?php

                                    $location = get_field('office_location');

                                    if( !empty($location) ):
                                        ?>
                                        <div class="google-map">
                                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-4-m">
                                    <address>
                                        <?= get_field('office_address'); ?>
                                    </address>

                                    <?php if( get_field('office_description') ) : ?>
                                        <p><em><?= get_field('office_description') ?></em></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </section>

                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary">

                    <?php if($lead = get_field('lead_contact')) : $id = $lead->ID; ?>
                    <div class="sidebar-contacts-container">
                        <h5 id="get-in-touch">Lead Contact</h5>
                        <div class="sidebar-contacts-group">
                            <div class="sidebar-contact">
                                <div class="sidebar-contact-content">

                                    <?php if ( has_post_thumbnail($id) ) : ?>
                                        <a href="<?= get_the_permalink($id); ?>">
                                            <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'profile-photo' )[0]; ?>" alt="<?= $lead->first_name . ' ' . $lead->last_name ?>" title="<?= $lead->first_name . ' ' . $lead->last_name ?>" style="background-color:white;"/>
                                            <strong><?= $lead->first_name . ' ' . $lead->last_name ?></strong>
                                        </a>
                                    <?php endif; ?>

                                    <?php $tel = get_field('tel', $id); ?>
                                    <?php if($tel) : ?>
                                        <br><span class="font-14">Tel. <?= get_field('tel', $id) ?></span>
                                    <?php endif; ?>

                                    <?php $mobile = get_field('mobile', $id); ?>
                                    <?php if($mobile) : ?>
                                        <br><span class="font-14">Mob. <?= get_field('mobile', $id) ?></span>
                                    <?php endif; ?>

                                    <?php $fax = get_field('fax', $id); ?>
                                    <?php if($fax) : ?>
                                        <br><span class="font-14">Fax. <?= get_field('fax', $id) ?></span>
                                    <?php endif; ?>
<!--                                        TODO add email link-->
                                    <br><span class="font-14"><a href="mailto:#"><?= get_field('email', $id) ?></a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>


                    <?php if( $linked_units = get_field('linked_units')) : ?>
                        <aside>
                            <h5>More Units</h5>
                            <ul class="sidebar-list no-bottom-margin no-bullet">
                                <?php foreach( $linked_units as $unit) : $id = $unit->ID; ?>
                                    <?php
                                        $flag = get_field('flag', $id);
                                        if( ! empty($flag) ) {  $url = $flag['url']; }
                                    ?>
                                    <li><a href="<?= get_the_permalink($id); ?>">
                                            <?php if( !empty($flag)) : ?>
                                                <img src="<?= $url; ?>" class="sidebar-list-flag" alt="<?= get_the_title($id); ?>"/>
                                            <?php endif; ?>
                                            <?= get_the_title($id); ?>
                                        </a></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="/our-network"><small>Explore our Network <i class="icon-right-open"></i></small></a>
                        </aside>
                    <?php endif; ?>

                    <?php dynamic_sidebar('unit'); ?>

                </div><!-- #secondary -->

            </div><!-- #content -->

<!--            START: team-menu-container -->
            <?php if($team = get_field('team')) : ?>
                <section id="team-menu-container" class="full-width-block-container collapse">
                    <div class="full-width-block-content-container light-grey">
                        <div class="full-width-block-content">
                            <h3 id="staff" class="upper small center">Our Team</h3>
                            <div id="our-team-carousel" class="team-carousel with-controls" data-number-of-items="<?= count($team); ?>">
                                <?= layout_our_team($team); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
<!--            END: team-menu-container -->

        <?php endwhile; endif; ?>

    </div><!-- #site-content-container -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
