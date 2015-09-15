<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    .full-width-block-container.our-people {
        content:"";
        background:url('<?php echo get_template_directory_uri(); ?>/img/our-people.jpg') center no-repeat;
        background-size:cover;
    }
</style>

<div id="content-container" class="our-people">

    <div id="hero" class="full-width-block-container with-content-bar our-people">
        <div class="full-width-block-content-container content-bar grey bg-image">
            <div class="full-width-block-content">
                <h1 class="upper center">Our People</h1>
                <h3 class="center no-top-margin">Praesent a magna tincidunt, elementum velit sed, sollicitudin mauris</h3>
                <div class="row">
                    <div class="col-6-m no-bottom-margin">
                        <p class="no-bottom-margin">In venenatis neque et hendrerit iaculis. Cras velit sem, consectetur quis semper nec, finibus sit amet libero. Aliquam ut ante tristique, egestas tortor et, ullamcorper odio. Donec quis mi efficitur, mattis diam pulvinar, facilisis dolor. Suspendisse in placerat sapien.</p>
                    </div>
                    <div class="col-6-m no-bottom-margin">
                        <p class="no-bottom-margin">Etiam vehicula commodo fringilla. Praesent a magna tincidunt, elementum velit sed, sollicitudin mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam commodo nec eros sed suscipit. Vivamus nunc nulla, tristique nec pellentesque ac, egestas sed leo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-nav grey">
        <div class="row content-area">
            <div class="col-9-m no-margin">
                <ul class="anchor-links-list no-margin no-bullet">
                    <li class="menu-title inline-s">Filter by</li>
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#expertise-filter-group">Expertise Area <i class="icon-down-open"></i></a></li>
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#continents">Country <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
            <div class="col-3-m no-margin hide-s">
                <input type="text" id="text-filter" placeholder="Type to filter..." />
            </div>
        </div>
    </div>

    <div class="filter-group-container">

        <div id="continents" class="page-nav filter-group grey hide">
            <div class="row content-area">
                <div class="col-8-m no-margin">
                    <ul class="anchor-links-list no-margin no-bullet">
                        <li class="menu-title inline-s">Continents</li>
                        <li class="inline-s"><a href="#" class="filter-group-trigger sub" data-filter-group="#europe-filter-group">Europe <i class="icon-down-open"></i></a></li>
                        <li class="inline-s"><a href="#" class="filter-group-trigger sub" data-filter-group="#asia-filter-group">Asia <i class="icon-down-open"></i></a></li>
                    </ul>
                </div>
                <div class="col-4-m no-margin" style="text-align: right">
                    <!--                <input type="text"/>-->
                </div>
            </div>
        </div>

        <div id="expertise-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <ul class="filter-list no-margin no-bullet">
                        <li><a href="#" class="filter" data-filter=".banking-and-financial-services" data-filtering-on-text="Banking and Financial Services">Banking and Financial Services</i></a></li>
                        <li><a href="#" class="filter" data-filter=".chemical-industrials-and-mining" data-filtering-on-text="Chemical, Industrials and Mining">Chemical, Industrials and Mining</a></li>
                        <li><a href="#" class="filter" data-filter=".energy-and-environment" data-filtering-on-text="Energy and Environment">Energy and Environment</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="europe-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <h5 class="filter-list-title">Europe</h5>
                    <ul class="filter-list no-margin no-bullet">
                        <li><a href="#" class="filter" data-filter=".country-1" data-filtering-on-text="Country 1">Country 1</i></a></li>
                        <li><a href="#" class="filter" data-filter=".country-2" data-filtering-on-text="Country 2">Country 2</a></li>
                        <li><a href="#" class="filter" data-filter=".country-3" data-filtering-on-text="Country 3">Country 3</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="asia-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <h5 class="filter-list-title">Asia</h5>
                    <ul class="filter-list no-margin no-bullet">
                        <li><a href="#" class="filter" data-filter=".banking-and-financial-services" data-filtering-on-text="Country 4">Country 4</i></a></li>
                        <li><a href="#" class="filter" data-filter=".chemical-industrials-and-mining" data-filtering-on-text="Country 5">Country 5</a></li>
                        <li><a href="#" class="filter" data-filter=".energy-and-environment" data-filtering-on-text="Country 6">Country 6</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <?php
        // The Query
        $fipriots = get_all_fipriots();
    ?>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary" class="full-width">
                <main id="main" class="site-main" role="main">

                    <?php if ( $fipriots->have_posts() ) : ?>

                        <!--                    Used by jQuery to update filtering-on-title when clear filter button is clicked -->
                        <div class="hide-s hide-m number-of-fipriots"><?= $fipriots->found_posts; ?></div>

                        <div class="filtering-on-container">
                            <h4 class="no-margin filtering-on-title">
                                Showing <?= $fipriots->found_posts > 1 ? $fipriots->found_posts . ' Fipriots' : $fipriots->found_posts . ' Fipriot' ; ?>
                            </h4>
                            <a href="#" class="btn btn-small secondary clear-filter hide"><i class="icon-cancel-1"></i> Clear Filter</a>
                        </div>


                        <div class="people-group-container">

                            <div class="people-group">

                                <?php while ( $fipriots->have_posts() ) : $fipriots->the_post(); ?>

                                    <?php $post_id = get_the_ID(); ?>

<!--TODO update filter class names-->
                                    <div class="person banking-and-financial-services country-3">
                                        <div class="person-profile-photo">
                                            <a href="<?= get_the_permalink(); ?>">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post_id) ) ?>" alt="<?= get_field('first_name'); ?> <?= get_field('last_name'); ?>" title="<?= get_field('first_name'); ?> <?= get_field('last_name'); ?>"/>
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="person-details">
                                            <h4 class="no-margin"><a href="<?= get_the_permalink(); ?>"><?= get_field('first_name'); ?> <?= get_field('last_name'); ?></a></h4>
<!--TODO update with Unit name-->
                                            <h6><?= get_field('position'); ?>, Unit name</h6>
                                            <div class="btn-container">
                                                <a href="<?= get_the_permalink(); ?>" class="btn">
                                                    <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                                </a>
                                            </div>
                                            <div class="person-contact-details">
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
                                                    <tr>
                                                        <td colspan="2">
<!--TODO update contact form link-->
                                                            <a href="#"><?=
                                                                get_field('email'); ?></a>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <br/><a href="<?= get_the_permalink(); ?>" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
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
