<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header();

$cat_obj = $wp_query->get_queried_object();
?>

<?php get_template_part('inc/breadcrumbs'); ?>

<?php if(has_post_thumbnail()) : ?>
    <style>
        #hero {
            content:"";
            background:url('<?= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'banner' )[0]; ?>') <?= str_replace('_', ' ', get_field('bg_position')); ?> no-repeat;
            background-size:cover;
        }
    </style>
<?php endif; ?>

<div id="content-container">

    <div id="hero" class="full-width-block-container">
        <!--            Set the content block height using the header_text_block_height field. If a featured image is set, override this height with the content-bar class-->
        <div class="full-width-block-content-container grey short">
            <div class="full-width-block-content center narrow">
                <h1 class="upper no-bottom-margin">News and Analysis in: <?php single_cat_title(); ?></h1>
            </div>
        </div>
    </div>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary">
                <main id="main" class="site-main" role="main">
                    <?php $articles = get_articles_by_category($cat_obj->cat_ID, 99999); ?>
                    <?php if($articles->have_posts()) : ?>
                        <?php while($articles->have_posts()) : $articles->the_post(); ?>
		                    <?php include('inc/article-extract.php'); ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        No news or analysis found in this category.
                    <?php endif; ?>

                    <?php // article_pagination($articles); ?>


                    <?php /* Restore original Post Data */ wp_reset_postdata(); ?>

                </main><!-- #main -->
            </div><!-- #primary -->
            <div id="secondary">
                <a href="/news-and-analysis" class="btn primary full-width">View all News and Analysis</a>
                <aside>
                    <h5>Categories</h5>
                    <ul class="taxonomy-list no-bottom-margin">
                        <?php wp_list_categories(['show_count' => 1, 'title_li' => '', 'orderby' => 'name']); ?>
                    </ul>
                </aside>
                <aside>
                    <h5>Tags</h5>
                    <?php echo format_sidebar_tags(); ?>
                </aside>
            </div>

        </div><!-- #content -->

    </div>
</div><!-- #content-container   -->


<?php get_footer(); ?>
