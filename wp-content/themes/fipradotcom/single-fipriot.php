<?php
/**
 * The template for displaying all single profiles.
 *
 * @package fipradotcom
 */

get_header(); ?>

<div id="content-container">

    <!-- The Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php $post_id = get_the_ID(); ?>

        <div id="hero" class="full-width-block-container with-content-bar content-bar-bottom profile">
            <div class="full-width-block-content-container content-bar grey">
                <div class="full-width-block-content left">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'profile-photo' )[0]; ?>" alt="<?= full_name(); ?>" title="<?= full_name(); ?>"/>
<!--                    TODO add else statement with placeholder profile photo-->
                    <?php endif; ?>
                    <h1 class="upper no-margin"><?= full_name(); ?></h1>
                    <h4 class="no-top-margin"><?= get_field('position'); ?>, Unit Name</h4>
<!-- TODO: update link to contact form-->
                    <a class="btn primary" href="#">Contact <?= get_field('first_name') ?></a>
                </div>
            </div>
        </div>

        <div id="site-content-container">

            <div id="site-content">

                <div id="primary" class="profile-content-area">
                    <main id="main" class="site-main" role="main">

                        <p class="lead"><?= get_field('lead_paragraph') ?></p>

                        <?= get_field('main_bio') ?>

                        <?php if( get_field('expertise') ) : ?>
                            <h3 id="expertise"><?= get_field('first_name') ?>'s Expertise</h3>
                            <div class="profile-expertise-showcase equal-heights">
                                <?php foreach(get_field('expertise') as $expertise_area) : ?>
                                    <div class="expertise-area">
                                        <a href="<?= get_the_permalink($expertise_area->ID); ?>">
                                            <div class="svg-icon"><?= file_get_contents(get_field('icon', $expertise_area->ID)); ?></div>
                                            <div class="expertise-area-name"><?= get_the_title($expertise_area->ID); ?></div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary">
                    <aside>
                        <h5 id="contact">Contact <?= get_field('first_name') ?></h5>
                        <div class="row">
                            <div class="col-6-xs col-12-xxs no-bottom-margin">
                                <address> <?= get_field('address') ?> </address>
                            </div>
                            <div class="col-6-xs col-12-xxs no-bottom-margin">
                                <address class="no-bottom-margin">
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

                                    </table>
<!-- TODO: update link to contact form -->
                                    <a href="#"><?= get_field('email') ?></a>
                                </address>
                            </div>
                        </div>
                    </aside>

<!--TODO update languages loop-->

                        <?php $languages = get_field('languages');
                            if($languages): ?>

                                <aside>
                                    <h5 id="languages">Languages Spoken</h5>
                                    <ul class="languages-list no-bottom-margin no-bullet">
                                        <?php foreach($languages as $language) : ?>
                                            <li><img src="<?= get_language_flag_url($language->term_id); ?>" class="languages-list-flag tooltip" alt="<?= $language->name; ?>" title="<?= $language->name; ?>"/></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </aside>

                        <?php endif; ?>

                </div><!-- #secondary -->

            </div><!-- #content -->

        </div>

    <!-- End of the loop -->
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no Fipriot found.' ); ?></p>
    <?php endif; ?>

</div><!-- #content-container   -->

<?php get_footer(); ?>
