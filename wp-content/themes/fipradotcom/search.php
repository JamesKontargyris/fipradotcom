<?php get_header(); ?>

<div id="content-container" class="with-border">

    <div id="site-content-container">

        <div id="content" class="site-content">

            <div id="primary" class="full-width">
                <main id="main" class="site-main" role="main">

                    <?php if ( have_posts() ) : ?>

                        <header>
                            <h1 class="feature no-margin"><i class="icon-search"></i> Search Results</h1>
                            <h2 class="page-title feature no-margin"><?php printf( __( 'Searching for: %s', 'fipradotcom' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                            <hr />
                        </header><!-- .page-header -->

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'content', 'search' );
                            ?>

                        <?php endwhile; ?>

                        <?php the_posts_navigation(); ?>

                    <?php else : ?>

                        <?php get_template_part( 'content', 'none' ); ?>

                    <?php endif; ?>

                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- #content -->
    </div>
</div><!-- #content-container   -->

<?php get_footer(); ?>