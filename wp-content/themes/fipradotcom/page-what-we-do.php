<?php get_header(); ?>

<div id="content-container">

    <div class="page-nav grey">
        <div class="row content-area">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title menu-title-toggle"><i class="icon-menu-1"></i> Jump to...</li>
                <li class="hide-s"><a class="jump-to-link" href="#areas-of-expertise">Areas of Expertise <i class="icon-down-open"></i></a></li>
                <li class="hide-s"><a class="jump-to-link" href="#public-affairs-services">Public Affairs Services <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
    </div>

    <section id="areas-of-expertise" class="full-width-block-container areas-of-expertise-block">
        <div class="full-width-block-content-container dark-grey">

            <div class="full-width-block-content">
                <div class="row">
                    <div class="col-12-l no-m-margin">
                        <h1 class="upper small center">Areas of Expertise</h1>
                    </div>
                </div>

                <?php $expertise_areas = get_expertise_areas(); ?>
                <?php if ( $expertise_areas->have_posts() ) : ?>
                    <div class="menu-list-and-entries-block">
                        <div class="row">
                            <div class="col-5-l">
                                <ul class="menu-list with-line" data-entry-group="1">
                                    <?php $i = 0; while ( $expertise_areas->have_posts() ) : $expertise_areas->the_post(); $i++; ?>
                                        <li <?php if($i == 1) : ?> class="active" <?php endif; ?>><a href="#entry-<?= $i; ?>">
                                            <div class="svg-icon margin-r"><?= file_get_contents(get_field('icon')); ?></div>
                                            <?= get_the_title(); ?>
                                        </a></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <div class="col-7-l entry-group" id="entry-group-1">
                                <?php $i = 0; $expertise_areas->rewind_posts(); // start again at the beginning
                                while ( $expertise_areas->have_posts() ) : $expertise_areas->the_post(); $i++; ?>
                                    <div class="entry" id="entry-<?= $i; ?>">
                                        <div class="entry-title">
                                            <h4 class="no-margin">
                                                <div class="svg-icon margin-r"><?= file_get_contents(get_field('icon')); ?></div>
                                                <?= get_the_title(); ?>
                                                <i class="icon-toggle icon-down-open"></i>
                                            </h4>
                                        </div>
                                        <div class="entry-content">
                                            <?= get_field('long_summary'); ?><br><br>

                                            <p><a href="<?= get_the_permalink(); ?>" class="btn primary">Read more</a></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <span style="text-align: center">Coming soon</span>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="public-affairs-services" class="full-width-block-container public-affairs-services-block">
        <div class="full-width-block-content-container light-grey">

            <h1 class="upper small center">Public Affairs Services</h1>
            <div class="full-width-block-content left">

                <?php $pa_services = get_public_affairs_services(); ?>
                <?php if ( $pa_services->have_posts() ) : ?>
                    <div id="public-affairs-services-carousel" class="carousel with-controls">

                        <?php while ( $pa_services->have_posts() ) : $pa_services->the_post(); ?>
                            <div>
                                <h2 class="no-top-margin center"><?= get_the_title(); ?></h2>
                                <p class="center"><?= get_field('description'); ?></p>
                                <?php $contact_id = get_field('fipriot_contact')->ID; ?>
                                <p class="center">Contact <a href="http://fipradotcom.dev/our-people/ukko-metsola" class="pa-service-ajax-contact" data-modal-url="<?= get_template_directory_uri(); ?>/paservice_contact_details.php?id=<?= $contact_id; ?>"><?= get_field('first_name', $contact_id); ?> <?= get_field('last_name', $contact_id); ?></a> for more information.</p>
                            </div>
                        <?php endwhile; ?>
                </div>
                <?php else : ?>
                    <span style="text-align: center">Coming soon</span>
                <?php endif; ?>

            </div>
        </div>
    </section>

</div><!-- #content-container   -->

<?php get_footer(); ?>

<div id="modal">
    This pop-up will contain contact details for the relevant person.
</div>