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
                        <a id="public_affairs_services"></a>
                        <h2 class="center">Public Affairs Services</h2>
                        <p class="center narrow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium ipsum leo, nec faucibus magna finibus congue. Integer nisl tellus, volutpat nec tellus at, ullamcorper finibus lectus. Aliquam erat volutpat.</p>

                        <div class="showcase">
                            <div class="row-of-2">
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-list-numbered"></i></div>
                                        <h3>Strategic Planning</h3>
                                        <p style="clear: both;">Jointly developing your Public Affairs action plan and objectives, clearly defining your strategic and tactical priorities.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Peter-Carlo Lehrell</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-book-open-1"></i></div>
                                        <h3>Narrative Development</h3>
                                        <p>Ensuring that your story effectively communicates your key messages and resonates with your target audiences.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Dirk Hudig</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-sitemap"></i></div>
                                        <h3>Stakeholder Mapping</h3>
                                        <p>Identifying the organisations and individuals that are relevant to your cause and helping you manage your contacts database.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Jan Ahlskog</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-chat"></i></div>
                                        <h3>Stakeholder Outreach</h3>
                                        <p>Hands-on support to establish constructive dialogue with key stakeholders and effectively execute your action plan.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Ukko Metsola</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-eye-outline"></i></div>
                                        <h3>Situation Analysis</h3>
                                        <p>Tailored, in-depth analysis and assessment of political and regulatory developments at international, national and local levels.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Daniel Furby</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-target"></i></div>
                                        <h3>Targeted Monitoring</h3>
                                        <p>Serving as your ‘eyes and ears’ on the ground to provide you with real-time intelligence and regular newsletters on key issues impacting your PA objectives.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Laura Batchelor</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon blue"><i class="icon-flag"></i></div>
                                        <h3>One-Stop-Shop PA Campaigns</h3>
                                        <p>Track record in leading and coordinating PA campaigns on the ground in over 60 countries, ensuring quality, consistency and timely delivery and execution.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Paul Buffet</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon turquoise"><i class="icon-warehouse"></i></div>
                                        <h3>In-House PA Capabilities Assessment</h3>
                                        <p>Identifying the strengths and weaknesses of your Government Affairs practice through personalised recommendations.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Laura Batchelor</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon orange"><i class="icon-award-2"></i></div>
                                        <h3>Training Sessions</h3>
                                        <p>Customised PA training sessions for your in-house policy and management personnel.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Dirk Hudig</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon violet"><i class="icon-video-chat"></i></div>
                                        <h3>Complementary Media Support</h3>
                                        <p>Crafting press statements that support your public policy objectives and helping you organise and prepare for press conferences and media appearances.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">David Lawsky</a> for more information.</p>
                                </div>
                                <div class="showcase-block center bg shift-half-col">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon periwinkle"><i class="icon-dollar-1"></i></div>
                                        <h3>EU Funding</h3>
                                        <p>Helping you understand what EU funds are available to your organisation and how to navigate the complex application process.</p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Peter-Carlo Lehrell</a> for more information.</p>
                                </div>
                            </div>

                        </div>

                        <hr class="medium"/>

                        <a id="areas_of_expertise"></a>
                        <h2 class="center">Areas of Expertise</h2>
                        <p class="center narrow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium ipsum leo, nec faucibus magna finibus congue. Integer nisl tellus, volutpat nec tellus at, ullamcorper finibus lectus. Aliquam erat volutpat.</p>

                        <div class="showcase">
                            <div class="row-of-3">
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-bank"></i></div>
                                        <h4>Banking and Financial Services</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <p class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-industrial-building"></i></div>
                                        <h4>Chemical, Industrials and Mining</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <p class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-lightbulb-1"></i></div>
                                        <h4>Energy and Environment</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <p class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-plus-2"></i></div>
                                        <h4>Healthcare and Pharma</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                        </p>
                                    </div>
                                    <p class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-monitor"></i></div>
                                        <h4>Telecoms, Media and Technology</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <p class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></p>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-airport"></i></div>
                                        <h4>Travel, Transport and Logistics</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <p class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></p>
                                </div>
                                <div class="showcase-block bg center shift-1-col">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-users"></i></div>
                                        <h4>Competition Policy</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <p class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></p>
                                </div>
                            </div>
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->


            </div><!-- #content -->
    </div><!-- .hero-banner-gradients -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
