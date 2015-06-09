<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    #hero {
        background:url('<?php echo get_template_directory_uri(); ?>/img/amsterdam4.jpg') center no-repeat;
        background-size:cover;
    }
</style>

<div id="content-container" class="unit">

    <?php get_template_part('inc/breadcrumbs'); ?>

    <div id="hero" class="full-width-block-container with-content-bar">
        <div class="full-width-block-content-container content-bar grey bottom bg-image">
            <div class="full-width-block-content center narrow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/flags/netherlands.png" alt="Flag" /> <h1 class="upper no-margin">The Netherlands</h1>
<!--                <p class="meta">Fipra Unit</p>-->
                <p class="lead no-margin">Fipra Netherlands was founded in 2001. Our motto: target based communications = result based influencing.</p>
            </div>
        </div>
    </div>

    <div class="page-nav">
        <div class="row content-area">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title menu-title-toggle"><i class="icon-menu-1"></i> Jump to...</li>
                <li class="hide-s"><a class="jump-to-link" href="#about-us">About Us <i class="icon-down-open"></i></a></li>
                <li class="hide-s"><a class="jump-to-link" href="#our-location">Our Location <i class="icon-down-open"></i></a></li>
                <li class="hide-s"><a class="jump-to-link" href="#our-team">Our Team <i class="icon-down-open"></i></a></li>
                <li class="hide-s hide-m"><a class="jump-to-link" href="#get-in-touch">Get in Touch <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
    </div>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary">
                <main id="main" class="site-main" role="main">

                    <h3 id="about-us">About Us</h3>
                    <p>Fipra Netherlands advises organizations that are in the centre of the political and public arena; want to face, make and manage issues; shape public perception and influence the process of decision making.</p>

                    <p>Our core business is to analyse and interpret external developments and frame internal positions with the objective to influence public affairs and lobbying target audiences.</p>

                    <p>The Fipra Netherlands team currently consists of fifteen experts in public affairs, lobbying and communication management. They all have working experience in parliament, companies, ministry, or public interest groups. For example as adviser to a Member of European Parliament, Minister, as in-house lobbyist or civil servant. Consultants are societally and/or politically active and are experienced campaigners.</p>

                    <p>All consultants have expertise in the formal and informal  decision- making process at local, national ('The Hague') and EU level, and have in-depth knowledge of precisely timing and shaping messages that will help change perceptions of relevant key decision makers. Based on day-to-day experience, consultants regularly give training and workshops. Fipra Netherlands is the first Dutch independent firm with a Code of Conduct.</p>

                    <section class="our-location">
                        <h3 id="our-location">Our Location</h3>
                        <div class="row">
                            <div class="col-7-m"><img src="<?= get_template_directory_uri(); ?>/img/unit-location-map.jpg" alt="Map Placeholder" /></div>
                            <div class="col-5-m">
                                <address>
                                    Bezuidenhoutseweg 101a<br/>
                                    Den Haag<br/>
                                    2594 AC<br/>
                                    The Netherlands
                                </address>
                            </div>
                        </div>

                        <p><em>Fipra Netherlands is strategically located in The Hague (governmental city of The Netherlands) next to the Ministry of Economic Affairs.</em></p>
                    </section>

                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary">

                <div class="sidebar-contacts-container">
                    <h5 id="get-in-touch">Lead Contact</h5>

                    <div class="sidebar-contacts-group">
                        <div class="sidebar-contact">
                            <div class="sidebar-contact-content">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/miriam_offermans_thumb.gif" alt="Miriam Offermans" style="background-color: white;" />
                                    <strong>Miriam Offermans</strong>
                                </a>
                                <p class="no-bottom-margin">
                                    <strong>Director, Fipra Netherlands</strong><br/>
                                    <span class="font-14">Tel. +31 703 046 487 <br/>
                                    <a href="mailto:miriam.offermans@fipra.com">miriam.offermans@fipra.com</a></span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


                <aside>
                    <h5>More Units</h5>
                    <ul class="sidebar-list no-bottom-margin no-bullet">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/france.png" class="sidebar-list-flag" alt="France"/> France</a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/germany.png" class="sidebar-list-flag" alt="Germany"/> Germany</a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flags/italy.png" class="sidebar-list-flag" alt="Italy"/> Italy</a></li>
                    </ul>
                    <a href="#"><small>Explore our Global Network <i class="icon-right-open"></i></small></a>
                </aside>

                <aside>
                    <h5>Sidebar title</h5>
                    <p>More sidebar blocks can be added here, controlled in the CMS.</p>
                </aside>
            </div><!-- #secondary -->

        </div><!-- #content -->

        <section id="team-menu-container" class="full-width-block-container collapse">
            <div class="full-width-block-content-container light-grey">

                <div class="full-width-block-content">
                    <h3 id="staff" class="upper small center">Our Team</h3>

                    <div id="our-team-carousel" class="team-carousel with-controls" data-number-of-items="8">
                        <?php for($i = 1; $i <= 8; $i++): ?>
                            <div style="" class="team-member">
                                <div class="profile-photo">
                                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/img/fipriots/miriam_offermans_thumb.gif" alt="Name Surname" /></a>
                                </div>
                                    <h4 class="no-bottom-margin"><a href="#">Name Surname</a></h4>
                                <h6>Position</h6>
                                <ul class="team-member-expertise">
                                    <li>
                                        <a href="#" class="tooltip svg-icon" title="Expertise Title">
                                            <?php echo file_get_contents(get_template_directory_uri() . "/img/icons/heart.svg"); ?>
                                        </a>
                                        <a href="#" class="tooltip svg-icon" title="Expertise Title">
                                            <?php echo file_get_contents(get_template_directory_uri() . "/img/icons/gears.svg"); ?>
                                        </a>

                                        <a href="#" class="tooltip svg-icon" title="Expertise Title">
                                            <?php echo file_get_contents(get_template_directory_uri() . "/img/icons/monitor.svg"); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div style="" class="team-member">
                                <div class="profile-photo">
                                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt="Name Surname" style="width:200px;" /></a>
                                </div>
                                <h4 class="no-bottom-margin"><a href="#">Name Surname</a></h4>
                                <h6>Position</h6>
                                <ul class="team-member-expertise">
                                    <li>
                                        <a href="#" class="tooltip svg-icon" title="Expertise Title">
                                            <?php echo file_get_contents(get_template_directory_uri() . "/img/icons/heart.svg"); ?>
                                        </a>
                                        <a href="#" class="tooltip svg-icon" title="Expertise Title">
                                            <?php echo file_get_contents(get_template_directory_uri() . "/img/icons/gears.svg"); ?>
                                        </a>

                                        <a href="#" class="tooltip svg-icon" title="Expertise Title">
                                            <?php echo file_get_contents(get_template_directory_uri() . "/img/icons/monitor.svg"); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="full-width-block-container small-padding light-grey">
            <div class="full-width-block-content-container dark-grey">

                <div class="full-width-block-content left">

                    <div id="testimonial-carousel" class="testimonial-group carousel">

                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada."
                            </div>
                            <footer class="author">
<!--                                <img src="--><?//= get_template_directory_uri(); ?><!--/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />-->
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                            <span class="triangle"></span>
                        </blockquote>
                        <blockquote cite="http://test.com" class="testimonial">
                            <div class="quote">
                                "Donec eu gravida est. Aliquam vulputate felis augue. Vestibulum commodo nec ex id tempor. Etiam pulvinar dolor quis enim porttitor malesuada."
                            </div>
                            <footer class="author">
<!--                                <img src="--><?//= get_template_directory_uri(); ?><!--/img/fipriots/peter-carlo-lehrell_thumb.gif" alt="Peter-Carlo Lehrell" />-->
                                <div class="author-details">
                                    <span class="name">Author Name</span><br/>Position, Organisation</strong>
                                </div>
                            </footer>
                            <span class="triangle"></span>
                        </blockquote>

                    </div>

                </div>
            </div>
        </section>
    </div><!-- #site-content-container -->
</div><!-- #content-container   -->

<?php get_footer(); ?>
