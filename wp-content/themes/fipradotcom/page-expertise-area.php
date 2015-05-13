<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    /*    If dark photo*/
    .full-width-block-container.expertise {
        content:"";
        background:url('<?php echo get_template_directory_uri(); ?>/img/plane.jpg') center no-repeat;
        background-size:cover;
    }
</style>

<div id="content-container" class="with-border">

        <div id="hero" class="full-width-block-container expertise">
            <div class="full-width-block-content-container blue bg-image">
                <div class="full-width-block-content center narrow">
                    <div class="circle-icon small"><i class="icon-plane"></i></div>
                    <h1 class="upper">Travel, Transport and Logistics</h1>
                    <p class="lead no-margin">Fipra’s Travel, Transport &amp; Logistics (TTL) practice, lead by <a
                            href="#">Ukko Metsola</a>, is composed of experienced staff and <a href="#">Special Advisers</a> with diverse expertise in the policies and regulatory frameworks that affect the TTL industries.</p>
                </div>
            </div>
        </div>

        <div class="page-nav">
            <div class="row content-area">
                <ul class="anchor-links-list no-margin no-bullet">
                    <li class="menu-title"><i class="icon-menu-1"></i> Jump to...</li>
                    <li class="hide-s"><a class="jump-to-link" href="#staff-menu-container">Practice Staff <i class="icon-down-open"></i></a></li>
                    <li class="hide-s hide-m"><a class="jump-to-link" href="#practice-lead">Practice Lead <i class="icon-down-open"></i></a></li>
                    <li class="hide-s"><a class="jump-to-link" href="#expertise-menu-container">More of our Expertise <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
        </div>

    <div id="site-content-container">

        <div id="content" class="site-content site-content-expertise">

            <div id="primary">
                <main id="main" class="site-main" role="main">

                    <p>The TTL business unit services are geared to deliver bottom-line savings, or reduced regulatory risks and costs, to our clients.</p>

                    <p>Since 2000, Fipra’s TTL practice has supported a large number of clients at different levels of political decision-making: we have a proven track record of working closely and constructively with political and regulatory bodies including local and national governments more than 25 countries, and vis-à-vis the Institutions of the European Union and intergovernmental organizations (e.g. International Maritime Organisation, World Trade Organisation).</p>

                    <p>Current and prior clients come from aviation, rail, road freight, maritime, cruising, express services, private for-hire transport and others. Our long-lasting partnership with a number of clients is a testimony to our ability to continuously generate a positive return on our clients’ investment through Fipra.</p>

                    <p>Besides transportation policies we have worked extensively on environmental policies, particularly in the political context of the EU / Brussels.</p>

                    <p>Through Fipra’s Global Network we are able to devise and execute effective ‘one-stop-shop’ campaigns across multiple jurisdictions. We regularly serve as an extension to some of the world’s largest companies’ in-house Government Affairs teams. Fipra provides holistic Public Affairs services to our clients ensuring that they are able to navigate complex policy and regulatory issues quickly and effectively. We have experience working seamlessly with leading law firms, management consultancies and PR firms, as well as with colleagues from the Public Affairs sector.</p>

                    <p>Our industry-leading standards for professionalism and transparency have made Fipra a trusted interlocutor in the areas of Travel, Transport & Logistics and ensure that our clients are always at the forefront of discussions on important policy and regulatory decisions.</p>

                    <p>As a result of the number and diversity of our TTL clients Fipra is uniquely able to identify patterns in the threats and opportunities that organisations face and to proactively assist with the creation of industry or issue-specific alliances between likeminded organisations.</p>

                    <p>We are experts in political processes. Where requested, Fipra is well-positioned to provide complimentary media support services by assisting with the preparation and distribution of press releases, arranging interviews with leading media outlets, and organising press conferences.</p>

                    <p>To learn more about how Fipra’s TTL team can support you please contact <a href="#">Ukko Metsola</a>.</p>


                    <div class="testimonial-group">
                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Testimonial number 1 Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada. Fusce eget orci convallis, finibus nunc vel, sagittis nibh. Donec eu gravida est. Aliquam vulputate felis augue."
                            </div>
                            <footer class="author">
                                <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                                    <span class="triangle"></span>
                        </blockquote>
                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Testimonial number 2 Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada. Fusce eget orci convallis, finibus nunc vel, sagittis nibh. Donec eu gravida est. Aliquam vulputate felis augue. Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada."
                            </div>
                            <footer class="author">
                                <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                            <span class="triangle"></span>
                        </blockquote>
                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Testimonial number 3 Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada. Fusce eget orci convallis, finibus nunc vel, sagittis nibh. Donec eu gravida est. Aliquam vulputate felis augue."
                            </div>
                            <footer class="author">
                                <img src="<?= get_template_directory_uri(); ?>/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                            <span class="triangle"></span>
                        </blockquote>
                    </div>
                    <div class="testimonial-group-carousel-controls">
                        <button class="button owl-prev" data-carousel=".testimonial-group">
                            <i class="icon-left-open-2" ></i> Previous
                        </button>
                        <button class="button owl-next" data-carousel=".testimonial-group">
                            Next <i class="icon-right-open-2"></i>
                        </button>
                    </div>

                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary">

                <div class="sidebar-contacts-container">
                    <h5 id="practice-lead">Practice Lead</h5>

                    <div class="sidebar-contacts-group">
                        <div class="sidebar-contact">
                            <div class="sidebar-contact-content">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt="Peter-Carlo Lehrell" style="background-color: white;" />
                                    <strong>Ukko Metsola</strong>
                                </a>
                                <p class="no-bottom-margin">
                                    <strong>Practice Position Info</strong><br/>
                            <span class="font-14">Tel. +01234 5678910 <br/>
                            Fax. +01234 5678910 <br/>
                            <a href="mailto:ukko.metsola@fipra.com">ukko.metsola@fipra.com</a></span>
                                </p>
                            </div>
                        </div>

<!--                        <div class="sidebar-contact">-->
<!--                            <div class="sidebar-contact-content">-->
<!--                                <a href="#">-->
<!--                                    <img src="--><?//= get_template_directory_uri(); ?><!--/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" style="background-color: white;" />-->
<!--                                    <strong>Peter-Carlo Lehrell</strong>-->
<!--                                </a>-->
<!--                                <p class="no-bottom-margin">-->
<!--                                    <strong>Chairman, Fipra International</strong><br/>-->
<!--                            <span class="font-14">Tel. +01234 5678910 <br/>-->
<!--                            Fax. +01234 5678910 <br/>-->
<!--                            <a href="mailto:lehrell@fipra.com">lehrell@fipra.com</a></span>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->

                    </div>
                </div>

                <aside>
                    <h5>Sidebar title</h5>
                    <p>More sidebar blocks can be added here, controlled in the CMS.</p>
                </aside>
            </div><!-- #secondary -->

        </div><!-- #content -->
    </div><!-- #site-content-container -->

    <div id="staff-menu-container" class="full-width-block-container">
        <div class="full-width-block-content-container dark-grey">

            <div class="full-width-block-content">
                <h3 id="staff" class="upper small center"><i class="icon-angle-circled-left owl-prev" data-carousel="#practice-staff-carousel"></i> Practice Staff <i class="icon-angle-circled-right owl-next" data-carousel="#practice-staff-carousel"></i></h3>
                <div class="team-group equal-heights">
                    <div id="practice-staff-carousel">

                        <div class="team-member">
                            <div class="team-member-profile-photo">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                </a>
                            </div>
                            <div class="team-member-details">
                                <h4 class="no-margin"><a href="#">Ukko Metsola 1</a></h4>
                                <h6>Position</h6>
                                <div class="team-member-bio">
                                    <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum.
                                        <br/><br/><a href="#">Full profile <i class="icon-right-open"></i></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="team-member">
                            <div class="team-member-profile-photo">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                </a>
                            </div>
                            <div class="team-member-details">
                                <h4 class="no-margin"><a href="#">Ukko Metsola 2</a></h4>
                                <h6>Position</h6>
                                <div class="team-member-bio">
                                    <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum.
                                        <br/><br/><a href="#">Full profile <i class="icon-right-open"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="team-member-profile-photo">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                </a>
                            </div>
                            <div class="team-member-details">
                                <h4 class="no-margin"><a href="#">Ukko Metsola 3</a></h4>
                                <h6>Position</h6>
                                <div class="team-member-bio">
                                    <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum.
                                        <br/><br/><a href="#">Full profile <i class="icon-right-open"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="team-member-profile-photo">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                </a>
                            </div>
                            <div class="team-member-details">
                                <h4 class="no-margin"><a href="#">Ukko Metsola 4</a></h4>
                                <h6>Position</h6>
                                <div class="team-member-bio">
                                    <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum.
                                        <br/><br/><a href="#">Full profile <i class="icon-right-open"></i></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="team-member">
                            <div class="team-member-profile-photo">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                </a>
                            </div>
                            <div class="team-member-details">
                                <h4 class="no-margin"><a href="#">Ukko Metsola 5</a></h4>
                                <h6>Position</h6>
                                <div class="team-member-bio">
                                    <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum.
                                        <br/><br/><a href="#">Full profile <i class="icon-right-open"></i></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="team-member">
                            <div class="team-member-profile-photo">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                </a>
                            </div>
                            <div class="team-member-details">
                                <h4 class="no-margin"><a href="#">Ukko Metsola 6</a></h4>
                                <h6>Position</h6>
                                <div class="team-member-bio">
                                    <p class="bio no-bottom-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum.
                                        <br/><br/><a href="#">Full profile <i class="icon-right-open"></i></a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="expertise-menu-container" class="full-width-block-container">
        <div class="full-width-block-content-container light-grey">
            <div class="full-width-block-content">
                <h3 id="expertise-menu" class="upper small center"><i class="icon-angle-circled-left owl-prev" data-carousel="#expertise-carousel"></i> Our Expertise <i class="icon-angle-circled-right owl-next" data-carousel="#expertise-carousel"></i></h3>

                <div id="expertise-carousel">

                    <div class="expertise-area">
                        <a href="#">
                            <div class="expertise-area-content">
                                <div class="circle-icon"><i class="icon-lightbulb"></i></div>
                                <h4>Energy and Environment</h4>
                            </div>
                        </a>
                    </div>
                    <div class="expertise-area">
                        <a href="#">
                            <div class="expertise-area-content">
                                <div class="circle-icon"><i class="icon-industrial-building"></i></div>
                                <h4>Chemical, Industrials and Mining</h4>
                            </div>
                        </a>
                    </div>
                    <div class="expertise-area">
                        <a href="#">
                            <div class="expertise-area-content">
                                <div class="circle-icon"><i class="icon-plane"></i></div>
                                <h4>Travel, Transport and Logistics</h4>
                            </div>
                        </a>
                    </div>
                    <div class="expertise-area">
                        <a href="#">
                            <div class="expertise-area-content">
                                <div class="circle-icon"><i class="icon-bank"></i></div>
                                <h4>Banking and Financial Services</h4>
                            </div>
                        </a>
                    </div>
                    <div class="expertise-area">
                        <a href="#">
                            <div class="expertise-area-content">
                                <div class="circle-icon"><i class="icon-lightbulb"></i></div>
                                <h4>Energy and Environment 2</h4>
                            </div>
                        </a>
                    </div>
                    <div class="expertise-area">
                        <a href="#">
                            <div class="expertise-area-content">
                                <div class="circle-icon"><i class="icon-industrial-building"></i></div>
                                <h4>Chemical, Industrials and Mining 2</h4>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div><!-- #content-container   -->

<?php get_footer(); ?>
