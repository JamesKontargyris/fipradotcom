<?php
/**
 * The template for displaying Units.
 *
 * @package fipradotcom
 */

get_header(); ?>

<!-- The Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $unit_id = get_the_ID(); ?>

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


                        <?php $location = get_field('office_location');
                        if(!empty($location)) : ?>

                            <section class="our-location">
                                <h3 id="our-location">Our Location</h3>

                                <div class="row">
                                    <div class="col-8-m">
                                        <!--Google Map-->
                                        <div class="google-map">
                                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                                        </div>
                                        <div class="google-map-missing">
                                            Ad-blocking software detected - it may be hiding the map above. Please disable any ad-blocking extensions or software for fipra.com.
                                        </div>
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

                        <?php endif; ?>

                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary">

                    <?php if($lead = get_field('lead_contact')) : $lead = $lead[0]; ?>
                        <div class="sidebar-contacts-container">
                            <h5 id="get-in-touch">First Point of Contact</h5>
                            <div class="sidebar-contacts-group">
                                <div class="sidebar-contact">
                                    <div class="sidebar-contact-content">

                                        <a href="<?= get_the_permalink($lead->ID); ?>">
                                            <?php if ( has_post_thumbnail($lead->ID) ) : ?>
                                                <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id( $lead->ID ), 'profile-photo' )[0]; ?>" alt="<?= $lead->first_name . ' ' . $lead->last_name ?>" title="<?= $lead->first_name . ' ' . $lead->last_name ?>" style="background-color:white;"/>
                                            <?php endif; ?>
                                            <strong><?= $lead->first_name . ' ' . $lead->last_name ?></strong>
                                        </a>

                                        <?php $tel = get_field('tel', $lead->ID); ?>
                                        <?php if($tel) : ?>
                                            <br><span class="font-14">Tel. <?= get_field('tel', $lead->ID) ?></span>
                                        <?php endif; ?>

                                        <?php $mobile = get_field('mobile', $lead->ID); ?>
                                        <?php if($mobile) : ?>
<!--                                            <br><span class="font-14">Mob. get_field('mobile', $lead->ID)</span>-->
                                        <?php endif; ?>

                                        <?php $fax = get_field('fax', $lead->ID); ?>
                                        <?php if($fax) : ?>
                                            <br><span class="font-14">Fax. <?= get_field('fax', $lead->ID) ?></span>
                                        <?php endif; ?>
                                        <div class="contact-button">
                                            <!--                                            TODO: Add Google Analytics event tracking-->
                                            <a href="/contact-fipriot?person=<?php echo get_field('first_name', $lead->ID) ?><?php echo get_field('last_name', $lead->ID) ?>&fipriot_id=<?php echo $lead->ID; ?>" class="btn primary btn-small btn-white">Contact <?php echo get_field('first_name', $lead->ID) ?></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php dynamic_sidebar('unit'); ?>

                </div><!-- #secondary -->

            </div><!-- #content -->

            <!--            START: team-menu-container -->
            <?php $team = get_all_fipriots_by_unit($unit_id); ?>
            <?php if($team->have_posts()) : ?>
                <section id="team-menu-container" class="full-width-block-container">
                    <div class="full-width-block-content-container light-grey">
                        <div class="full-width-block-content">
                            <h3 id="staff" class="upper small center">Our Team</h3>
                            <div id="our-team-carousel" class="team-carousel with-controls" data-number-of-items="<?php echo $team->found_posts; ?>">
                                <?php while($team->have_posts()) : $team->the_post(); ?>
                                    <?php echo layout_fipriot_team_member(get_the_ID(), false, false, true); ?>
                                <?php endwhile; ?>
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
