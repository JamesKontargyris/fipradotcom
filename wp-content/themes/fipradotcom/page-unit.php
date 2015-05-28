<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    #hero {
        background:url('<?php echo get_template_directory_uri(); ?>/img/amsterdam.jpg') top no-repeat;
        background-size:cover;
    }
</style>

<div id="content-container" class="unit">

    <?php get_template_part('inc/breadcrumbs'); ?>

    <div id="hero" class="full-width-block-container with-content-bar">
        <div class="full-width-block-content-container content-bar grey bottom bg-image">
            <div class="full-width-block-content left narrow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/flags/netherlands.png" alt="Flag" /> <h1 class="upper no-margin">The Netherlands</h1>
<!--                <p class="meta">Fipra Unit</p>-->
                <p class="lead no-margin">Lead paragraph aenean vel augue nec erat dignissim euismod sed nec erat. Morbi aliquam sit amet magna vel pulvinar. Maecenas ultrices urna sed lectus faucibus facilisis. In eu risus sed est pulvinar.</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis, ligula in ornare malesuada, erat ante gravida augue, non fermentum ligula odio vitae eros. Donec elit purus, tristique sit amet finibus vitae, interdum ut nisi. Nam mattis, lorem volutpat accumsan iaculis, ante justo elementum urna, eget tempor justo lacus quis leo. Pellentesque metus ligula, facilisis eu diam eget, semper maximus lorem. Vivamus fringilla mi vitae risus viverra, ac tempor urna elementum. Duis semper odio quis erat finibus, eget tincidunt est ultrices. Morbi sit amet ante a mauris auctor finibus. Quisque eget risus at ligula egestas dapibus sit amet et enim.</p>

                    <p>Phasellus quis accumsan dolor, eget tempus tortor. Vivamus iaculis massa a nibh pretium, sed interdum dui molestie. Suspendisse non ipsum eu ligula tincidunt vulputate vitae nec metus. Donec maximus sagittis magna, id auctor purus dapibus eu. Vestibulum gravida, libero at aliquet euismod, orci libero consectetur tellus, sit amet mattis velit lorem in velit. Nam quis nisl porta, placerat est in, consectetur dolor. Proin condimentum, nunc a malesuada interdum, neque nisi euismod dui, et luctus felis felis a ligula. Nam maximus lacus vel quam mattis, nec elementum est tempor. Phasellus pulvinar diam sed nisi scelerisque efficitur. Sed fringilla varius dolor, at placerat velit. Duis aliquet convallis ipsum, vel ultrices felis aliquet quis. Aliquam imperdiet magna eget turpis fringilla pellentesque.</p>

                    <p>Vestibulum sed pulvinar orci, efficitur tristique arcu. Fusce a rutrum neque, vel efficitur urna. Vivamus ut iaculis mi. Etiam eget tortor ut metus sagittis semper a at urna. Mauris sit amet lacinia nunc, vestibulum elementum urna. Sed a lorem non leo consequat venenatis mattis a arcu. Sed a sapien malesuada ipsum convallis mattis. Nunc lacinia lorem sit amet urna lacinia placerat. Curabitur cursus mauris vitae nisi vulputate tincidunt. Integer sit amet efficitur neque. Aenean tincidunt imperdiet est sit amet dictum. In tortor augue, tempus nec justo ac, tincidunt blandit lacus. Nullam mi leo, venenatis pretium ipsum ac, iaculis cursus orci.</p>

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

                        <p><em>Info on location lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta dolor feugiat eleifend elementum. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor ullamcorper eu tristique risus.</em></p>
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
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/pieter-walraven_thumb.gif" alt="Pieter Walraven" style="background-color: white;" />
                                    <strong>Pieter Walraven</strong>
                                </a>
                                <p class="no-bottom-margin">
                                    <strong>Head of Unit, Fipra Netherlands</strong><br/>
                            <span class="font-14">Tel. +01234 5678910 <br/>
                            Fax. +01234 5678910 <br/>
                            <a href="mailto:pieter.walraven@fipra.com">pieter.walraven@fipra.com</a></span>
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
                                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt="Name Surname" /></a>
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
