<?php
/**
 * The template for displaying expertise area pages.
 *
 * @package fipradotcom
 */

get_header(); ?>

<!-- The Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $expertise_id = get_the_ID(); ?>

    <?php get_template_part('inc/breadcrumbs'); ?>

    <?php include('inc/header_featured_image.php'); ?>

    <div id="content-container" class="expertise-area">

        <?php include('inc/hero_banner.php'); ?>

        <div class="page-nav">
            <div class="row content-area">
                <ul class="anchor-links-list no-margin no-bullet">
                    <li class="menu-title menu-title-toggle"><i class="icon-menu-1"></i> Jump to...</li>
                    <li class="hide-s"><a class="jump-to-link" href="#staff-menu-container">Practice Staff <i class="icon-down-open"></i></a></li>
                    <li class="hide-s hide-m"><a class="jump-to-link" href="#practice-lead">Practice Lead <i class="icon-down-open"></i></a></li>
                    <li class="hide-s"><a class="jump-to-link" href="#expertise-menu-container">More of our Expertise <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
        </div>

        <div id="site-content-container">

            <div id="site-content">

                <div id="primary">
                    <main id="main" class="site-main" role="main">

                        <?php the_content(); ?>


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
<!--                                            <br><span class="font-14">Mob. --><?//= get_field('mobile', $lead->ID) ?><!--</span>-->
                                        <?php endif; ?>

                                        <?php $fax = get_field('fax', $lead->ID); ?>
                                        <?php if($fax) : ?>
                                            <br><span class="font-14">Fax. <?= get_field('fax', $lead->ID) ?></span>
                                        <?php endif; ?>
                                        <!--                                        TODO add email link-->
                                        <br><span class="font-14"><a href="mailto:#"><?= get_field('email', $lead->ID) ?></a></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php $languages = get_field('languages');
                    if($languages): ?>

                        <aside>
                            <h5 id="languages">Languages</h5>
                            <ul class="languages-list no-bottom-margin no-bullet">
                                <?php foreach($languages as $language) : ?>
                                    <li><img src="<?= get_language_flag_url($language->term_id); ?>" class="languages-list-flag tooltip" alt="<?= $language->name; ?>" title="<?= $language->name; ?>"/></li>
                                <?php endforeach; ?>
                            </ul>
                        </aside>

                    <?php endif; ?>

                    <?php dynamic_sidebar('expertise-area'); ?>
                </div><!-- #secondary -->

            </div><!-- #content -->
        </div><!-- #site-content-container -->

        <!--            START: team-menu-container -->
        <?php $team = get_field('practice_staff'); ?>
        <?php if($team) : ?>
            <section id="team-menu-container" class="full-width-block-container">
                <div class="full-width-block-content-container light-grey">
                    <div class="full-width-block-content">
                        <h3 id="staff" class="upper small center">Practice Staff</h3>
                        <div id="our-team-carousel" class="team-carousel with-controls" data-number-of-items="<?php echo count($team); ?>">
                            <?php foreach($team as $fipriot) : ?>
                                <?php echo layout_fipriot_team_member($fipriot->ID, false, true, true); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!--            END: team-menu-container -->

        <?= page_testimonials(); ?>

        <?php include('inc/expertise_areas_carousel.php'); ?>


    <?php endwhile; endif; ?>

</div><!-- #content-container   -->

<?php get_footer(); ?>
