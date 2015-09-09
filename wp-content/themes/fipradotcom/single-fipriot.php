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

        <?php
            $post_id = get_the_ID();
        ?>

        <div id="hero" class="full-width-block-container with-content-bar content-bar-bottom profile">
            <div class="full-width-block-content-container content-bar grey">
                <div class="full-width-block-content left">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ) ?>" alt="Ukko Metsola"/>
                    <?php endif; ?>
                    <h1 class="upper no-margin"><?= get_field('first_name') ?> <?= get_field('last_name') ?></h1>
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

                        <h3 id="expertise"><?= get_field('first_name') ?>'s Expertise</h3>
<!--TODO Add expertise loop-->
                        <div class="profile-expertise-showcase equal-heights">
                                <div class="expertise-area">
                                    <a href="#">
                                        <div class="svg-icon"><?php echo file_get_contents(get_template_directory_uri() . "/img/icons/windmill.svg"); ?></div>
                                        <div class="expertise-area-name">Energy and Environment</div>
                                    </a>
                                </div>
                            </div>

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
                    <aside>
                        <h5 id="languages">Languages Spoken</h5>
                        <ul class="languages-list no-bottom-margin no-bullet">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/finland.png" class="languages-list-flag tooltip" alt="Finnish" title="Finnish"/></li>
                        </ul>
                    </aside>

                </div><!-- #secondary -->

            </div><!-- #content -->

        </div>

    <!-- End of the loop -->
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no Fipriot found.' ); ?></p>
    <?php endif; ?>

</div><!-- #content-container   -->

<?php get_footer(); ?>
