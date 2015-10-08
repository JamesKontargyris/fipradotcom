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

        <?php get_template_part('inc/breadcrumbs'); ?>

        <?php $post_id = get_the_ID(); ?>

        <div id="hero" class="full-width-block-container content-bar-bottom profile">
            <div class="full-width-block-content-container grey">
                <div class="full-width-block-content left">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'profile-photo' )[0]; ?>" alt="<?php echo full_name(); ?>" title="<?php echo full_name(); ?>" class="photo-tile dark-shadow" />
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri() ?>/img/blank_profile_<?php echo get_field('gender'); ?>.png" alt="<?php echo full_name(); ?>" title="<?php echo full_name(); ?>" class="photo-tile dark-shadow" />
                    <?php endif; ?>

                    <h1 class="upper no-margin"><?php echo full_name(); ?></h1>
                    <?php if(get_field('is_special_adviser')) : ?>
                        <h4 class="no-top-margin">Special Adviser<?php echo get_field('special_adviser_expertise') ? ', ' . get_field('special_adviser_expertise') : ''; ?></h4>
                    <?php else : ?>
                        <h4 class="no-top-margin"><?php echo get_field('position'); ?><?php echo get_field('unit') ? ', ' . get_field('unit')->post_title : ''; ?></h4>
                    <?php endif; ?>
                    <!-- TODO: update link to contact form-->
                    <a class="btn primary" href="#">Contact <?php echo get_field('first_name') ?></a>
                </div>
            </div>
        </div>

        <div id="site-content-container">

            <div id="site-content">

                <div id="primary" class="profile-content-area">
                    <main id="main" class="site-main" role="main">

                        <?php if($lead_para = get_field('lead_paragraph') ) : ?>
                            <p class="lead"><?php echo $lead_para; ?></p>
                        <?php endif; ?>

                        <?php echo get_field('main_bio') ?>

                        <?php if( get_field('expertise') && ! get_field('is_special_adviser') ) : ?>
                            <h3 id="expertise"><?php echo get_field('first_name') ?>'s Expertise</h3>
                            <div class="profile-expertise-showcase equal-heights">
                                <?php foreach(get_field('expertise') as $expertise_area) : ?>
                                    <div class="expertise-area">
                                        <a href="<?php echo get_the_permalink($expertise_area->ID); ?>">
                                            <div class="svg-icon"><?php echo file_get_contents(get_field('icon', $expertise_area->ID)); ?></div>
                                            <div class="expertise-area-name"><?php echo get_the_title($expertise_area->ID); ?></div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary">
                    <aside>
                        <h5 id="contact">Contact <?php echo get_field('first_name') ?></h5>
                        <div class="row">
                            <div class="col-6-xs col-12-xxs no-bottom-margin">
                                <address> <?php echo get_field('address') ?> </address>
                            </div>
                            <div class="col-6-xs col-12-xxs no-bottom-margin">
                                <address class="no-bottom-margin">
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

                                    </table>
<!-- TODO: update link to contact form -->
                                    <a href="#"><?php echo get_field('email') ?></a>
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
                                            <li><img src="<?php echo get_language_flag_url($language->term_id); ?>" class="languages-list-flag tooltip" alt="<?php echo $language->name; ?>" title="<?php echo $language->name; ?>"/></li>
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
