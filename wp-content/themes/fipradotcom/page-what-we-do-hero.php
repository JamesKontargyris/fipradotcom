<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
/*    Styles to position gradient in correct position over photo */
/*    Small and Medium Screens */
    .with-hero-banner {
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/people.jpg');
        background-position: top center;
        background-repeat: no-repeat;
        background-size:auto 650px;
    }

</style>

<!--<div id="content-container">-->
    <div id="content-container" class="with-hero-banner">
        <div class="hero-banner-gradient gradient-right dark-image">

            <div class="hero-banner-container">
                <div class="hero-banner right light-text">
                    <h1 class="feature"><?php the_title(); ?></h1>
                    <h2 class="feature">Professional Public Affairs in more than 60 countries.</h2>
                    <p class="lead">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar eleifend et in lectus.</p>
                    <a href="#" class="btn primary">Public Affairs Services</a> <a href="#" class="btn secondary">Areas of Expertise</a>
                </div>
            </div>

            <div id="content" class="site-content">

                <div id="primary" class="content-area full-width">
                    <main id="main" class="site-main" role="main">

                        <h2 class="center">Public Affairs Services</h2>
                        <p class="center narrow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium ipsum leo, nec faucibus magna finibus congue. Integer nisl tellus, volutpat nec tellus at, ullamcorper finibus lectus. Aliquam erat volutpat.</p>

                        <div class="gallery row-of-three">
                            <div class="gallery-block center bg">
                                <div class="featured-image">
                                    <img src="http://lorempixel.com/400/200/city" alt="Service Image"/>
                                </div>
                                <div class="gallery-block-content">
                                    <h3>Service Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center bg">
                                <div class="featured-image">
                                    <img src="http://lorempixel.com/400/200/city" alt="Service Image"/>
                                </div>
                                <div class="gallery-block-content">
                                    <h3>Service Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center bg">
                                <div class="featured-image">
                                    <img src="http://lorempixel.com/400/200/city" alt="Service Image"/>
                                </div>
                                <div class="gallery-block-content">
                                    <h3>Service Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center outline">
                                <div class="featured-image">
                                    <img src="http://lorempixel.com/400/200/city" alt="Service Image"/>
                                </div>
                                <div class="gallery-block-content">
                                    <h3>Service Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center outline">
                                <div class="featured-image">
                                    <img src="http://lorempixel.com/400/200/city" alt="Service Image"/>
                                </div>
                                <div class="gallery-block-content">
                                    <h3>Service Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center outline">
                                <div class="featured-image">
                                    <img src="http://lorempixel.com/400/200/city" alt="Service Image"/>
                                </div>
                                <div class="gallery-block-content">
                                    <h3>Service Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                        </div>

                        <hr/>

                        <h2 class="center">Areas of Expertise</h2>
                        <p class="center narrow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium ipsum leo, nec faucibus magna finibus congue. Integer nisl tellus, volutpat nec tellus at, ullamcorper finibus lectus. Aliquam erat volutpat.</p>

                        <div class="gallery row-of-three">
                            <div class="gallery-block center bg orange">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center bg violet">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center bg turquoise">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center bg">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center bg">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center bg">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center outline">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center outline">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                            <div class="gallery-block center outline">
                                <div class="gallery-block-content">
                                    <div class="icon-circle"><i class="fa fa-globe"></i></div>
                                    <h3>Area of Expertise Title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                                </div>
                                <p class="highlight-box secondary br-bottom"><small>Contact <a href="#">Federico Fipriot</a> for more information.</small></p>
                            </div>
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->


            </div><!-- #content -->
    </div><!-- .hero-banner-gradients -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
