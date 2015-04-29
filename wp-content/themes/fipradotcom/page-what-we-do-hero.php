<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
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

                        <div class="showcase equal-heights">
                            <div class="row-of-2">
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-list-numbered"></i></div>
                                        <h3 class="no-top-margin">Strategic Planning</h3>
                                        <p style="clear: both;">Jointly developing your Public Affairs action plan and objectives, clearly defining your strategic and tactical priorities.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Peter-Carlo Lehrell</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-book-open-1"></i></div>
                                        <h3 class="no-top-margin">Narrative Development</h3>
                                        <p>Ensuring that your story effectively communicates your key messages and resonates with your target audiences.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Dirk Hudig</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-sitemap"></i></div>
                                        <h3 class="no-top-margin">Stakeholder Mapping</h3>
                                        <p>Identifying the organisations and individuals that are relevant to your cause and helping you manage your contacts database.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Jan Ahlskog</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-chat"></i></div>
                                        <h3 class="no-top-margin">Stakeholder Outreach</h3>
                                        <p>Hands-on support to establish constructive dialogue with key stakeholders and effectively execute your action plan.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Ukko Metsola</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-eye-outline"></i></div>
                                        <h3 class="no-top-margin">Situation Analysis</h3>
                                        <p>Tailored, in-depth analysis and assessment of political and regulatory developments at international, national and local levels.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Daniel Furby</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-target"></i></div>
                                        <h3 class="no-top-margin">Targeted Monitoring</h3>
                                        <p>Serving as your ‘eyes and ears’ on the ground to provide you with real-time intelligence and regular newsletters on key issues impacting your PA objectives.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Laura Batchelor</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon blue"><i class="icon-flag"></i></div>
                                        <h3 class="no-top-margin">One-Stop-Shop PA Campaigns</h3>
                                        <p>Track record in leading and coordinating PA campaigns on the ground in over 60 countries, ensuring quality, consistency and timely delivery and execution.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Paul Buffet</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon turquoise"><i class="icon-warehouse"></i></div>
                                        <h3 class="no-top-margin">In-House PA Capabilities Assessment</h3>
                                        <p>Identifying the strengths and weaknesses of your Government Affairs practice through personalised recommendations.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Laura Batchelor</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon orange"><i class="icon-award-2"></i></div>
                                        <h3 class="no-top-margin">Training Sessions</h3>
                                        <p>Customised PA training sessions for your in-house policy and management personnel.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Dirk Hudig</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon violet"><i class="icon-video-chat"></i></div>
                                        <h3 class="no-top-margin">Complementary Media Support</h3>
                                        <p>Crafting press statements that support your public policy objectives and helping you organise and prepare for press conferences and media appearances.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">David Lawsky</a> for more information.</div>
                                </div>
                                <div class="showcase-block center bg shift-half-col">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon periwinkle"><i class="icon-dollar-1"></i></div>
                                        <h3 class="no-top-margin">EU Funding</h3>
                                        <p>Helping you understand what EU funds are available to your organisation and how to navigate the complex application process.</p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom">Contact <a href="#modal" rel="modal:open">Peter-Carlo Lehrell</a> for more information.</div>
                                </div>
                            </div>

                        </div>

                        <hr class="medium"/>

                        <a id="areas_of_expertise"></a>
                        <h2 class="center">Areas of Expertise</h2>
                        <p class="center narrow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium ipsum leo, nec faucibus magna finibus congue. Integer nisl tellus, volutpat nec tellus at, ullamcorper finibus lectus. Aliquam erat volutpat.</p>

                        <div class="showcase equal-heights">
                            <div class="row-of-3">
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-bank"></i></div>
                                        <h4 class="no-top-margin">Banking and Financial Services</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <div class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-industrial-building"></i></div>
                                        <h4 class="no-top-margin">Chemical, Industrials and Mining</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <div class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-lightbulb-1"></i></div>
                                        <h4 class="no-top-margin">Energy and Environment</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <div class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-plus-2"></i></div>
                                        <h4 class="no-top-margin">Healthcare and Pharma</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                        </p>
                                    </div>
                                    <div class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-monitor"></i></div>
                                        <h4 class="no-top-margin">Telecoms, Media and Technology</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <div class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></div>
                                </div>
                                <div class="showcase-block center bg">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-airport"></i></div>
                                        <h4 class="no-top-margin">Travel, Transport and Logistics</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <div class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></div>
                                </div>
                                <div class="showcase-block bg center shift-1-col">
                                    <div class="showcase-block-content">
                                        <div class="circle-icon"><i class="icon-users"></i></div>
                                        <h4 class="no-top-margin">Competition Policy</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                    </div>
                                    <div class="highlight-box secondary br-bottom"><a href="#" class="btn primary no-margin">Find out more</a></div>
                                </div>
                            </div>
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->


            </div><!-- #content -->
    </div><!-- .hero-banner-gradients -->
</div><!-- #content-container   -->

<?php get_footer(); ?>

<div id="modal">
    This pop-up will contain contact details for the relevant person.
</div>
