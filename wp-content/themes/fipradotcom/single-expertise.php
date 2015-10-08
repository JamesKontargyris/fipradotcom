<?php
/**
 * The template for displaying expertise area pages.
 *
 * @package fipradotcom
 */

get_header(); ?>

<?php include('inc/header_featured_image.php'); ?>

<div id="content-container" class="expertise-area">

    <!-- The Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

                    <aside class="sidebar-contacts-container">
                        <h5 id="practice-lead">Practice Lead</h5>
                        <?php $practice_lead = get_field('practice_lead'); $id = $practice_lead->ID; ?>
                        <div class="sidebar-contacts-group">
                            <div class="sidebar-contact">
                                <div class="sidebar-contact-content">
                                    <a href="<?= get_the_permalink($id); ?>">
                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($id) ) ?>" alt="<?= get_field('first_name', $id); ?> <?= get_field('last_name', $id); ?>"/>
                                        <strong><?= get_field('first_name', $id); ?> <?= get_field('last_name', $id); ?></strong>
                                    </a>

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
    <!--TODO update mailto link-->
                                    <br><span class="font-14"><a href="mailto:#"><?= get_field('email', $id) ?></a></span>

                                </div>
                            </div>

                        </div>
                    </aside>

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
<!--                    TODO add sidebar for expertise area -->
                </div><!-- #secondary -->

            </div><!-- #content -->
        </div><!-- #site-content-container -->

        <section id="team-menu-container" class="full-width-block-container collapse">
            <div class="full-width-block-content-container light-grey">

                <div class="full-width-block-content">
                    <h3 id="staff" class="upper small center">Practice Staff</h3>
                    <?php $staff = get_field('practice_staff'); ?>
                    <div id="practice-staff-carousel" class="team-carousel with-controls" data-number-of-items="<?= count($staff); ?>">
                        <?= layout_practice_staff($staff); ?>
                    </div>
                </div>
            </div>
        </section>

        <?= page_testimonials(); ?>

        <?php include('inc/expertise_areas_carousel.php'); ?>


    <?php endwhile; endif; ?>

</div><!-- #content-container   -->

<?php get_footer(); ?>
