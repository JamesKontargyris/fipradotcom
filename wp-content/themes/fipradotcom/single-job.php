<?php get_header(); ?>

<div id="content-container" class="job-listing">

    <div id="site-content-container">

        <div id="site-content">

            <!-- The Loop -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php $post_id = get_the_ID(); ?>

                <div id="primary">
                    <main id="main" class="site-main" role="main">

                        <h1 class="no-margin"><?php the_title(); ?></h1>
                        <h4 class="no-top-margin">
                            <?php
                            echo get_field('location_information') ?  get_field('location_information') : '';
                            echo get_field('location_information') && get_field('salary_information') ? ', ' : '';
                            echo get_field('salary_information') ? get_field('salary_information') : '';
                            ?>
                        </h4>
                        <?php echo get_field('closing_date') ? '<h5>Closes ' . date('d M Y', strtotime(get_field('closing_date'))) . '</h5>' : ''; ?>

                        <hr class="small"/>
                        <?php if(get_field('lead_paragraph')) : ?>
                            <p class="lead black-text"><?php echo get_field('lead_paragraph'); ?></p>
                        <?php endif; ?>

                        <?php the_content(); ?>

                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="secondary">
                    <div class="sidebar-contacts-container">
                        <h5 id="practice-lead">Apply to:</h5>
<!--                        Get ID of Fipriot to apply to-->
                        <?php $f_id = get_field('apply_to')->ID; ?>

                        <div class="sidebar-contacts-group">
                            <div class="sidebar-contact">
                                <div class="sidebar-contact-content">
                                    <?php if ( has_post_thumbnail($f_id) ) : ?>
                                        <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id( $f_id ), 'profile-photo' )[0]; ?>" alt="<?php echo get_field('first_name', $f_id) . ' ' . get_field('last_name', $f_id); ?>" title="<?php echo get_field('first_name', $f_id) . ' ' . get_field('last_name', $f_id); ?>" style="background-color: white;"/>
                                    <?php endif; ?>
                                    <p><strong><?php echo get_field('first_name', $f_id) . ' ' . get_field('last_name', $f_id); ?></strong><br/><?php echo get_field('position', $f_id) ? get_field('position', $f_id) : ''; echo get_field('position', $f_id) && get_field('unit', $f_id) ? ', ' : ''; echo get_field('unit', $f_id) ? get_field('unit', $f_id)->post_title : ''; ?></p>
<!--                                    TODO Update apply button-->
                                    <p class="no-margin"><a href="#" class="btn primary btn-white">Apply</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if(get_field('include')) : ?>
                        <aside>
                            <h5>Please include:</h5>
                            <ul class="bullets">
                                <?php $requirements = explode("\n", get_field('include')); ?>
                                <?php foreach($requirements as $requirement) : ?>
                                    <li><?php echo $requirement; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </aside>
                    <?php endif; ?>
                </div><!-- #secondary -->

        <?php endwhile; endif; ?>

        </div><!-- #content -->
    </div>
</div><!-- #content-container   -->

<?php get_footer(); ?>

<div id="modal">
    This pop-up will contain contact details for the relevant person.
</div>
