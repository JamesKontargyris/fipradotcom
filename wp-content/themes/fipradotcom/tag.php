<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header();

$tag_obj = $wp_query->get_queried_object();
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
                <h1 class="upper no-bottom-margin">News and Analysis tagged: <?php single_tag_title(); ?></h1>
            </div>
        </div>
    </div>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary">
                <main id="main" class="site-main" role="main">
                    <?php $articles = get_articles_by_tag($tag_obj->term_taxonomy_id, 99999); ?>
                    <?php if($articles->have_posts()) : ?>
                        <?php while($articles->have_posts()) : $articles->the_post(); ?>
                            <div class="article-extract">
                                <div style="float:left;">
                                    <h4 class="article-extract__headline"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <div class="article-extract__meta">
                                        <?php if(get_field('article_type') == 'news') : ?>
                                            <img class="article-extract__type-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-newspaper.png" alt=""> <span class="article-extract__type--news">News</span>
                                        <?php elseif(get_field('article_type') == 'analysis') : ?>
                                            <img class="article-extract__type-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-magnifying-glass.png" alt=""> <span class="article-extract__type--analysis">Analysis</span>
                                        <?php endif; ?>
                                        <?php if(get_field('author')) : ?>
                                            by <a href="<?php echo get_the_permalink(get_field('author')[0]); ?>"><strong><?php echo get_the_title(get_field('author')[0]); ?></a></strong> |
                                        <?php endif; ?>
                                        Posted on <?php echo get_the_date('d M Y'); ?>
                                        <?php if(get_the_category()) : ?>
                                            in <?php echo format_article_categories(get_the_category()); ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(has_post_thumbnail()) : ?>
                                        <img class="article-extract__image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'article'); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
                                    <?php endif; ?>
                                    <p class="article-extract__text"><?php echo get_the_excerpt(); ?> <a class="article-extract__read-more" href="<?php echo get_the_permalink(); ?>">Read&nbsp;more...</a></p>


                                </div>
                            </div>
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
