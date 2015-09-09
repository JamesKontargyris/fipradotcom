<?php
/**
 * The template for displaying expertise area pages.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    #hero {
        content:"";
        background:url('<?php echo get_template_directory_uri(); ?>/img/movement.jpg') center no-repeat;
        background-size:cover;
    }
</style>

<div id="content-container" class="expertise-area">

    <div id="hero" class="full-width-block-container with-content-bar">
        <div class="full-width-block-content-container content-bar grey bg-image">
            <div class="full-width-block-content center narrow">
                <h1 class="upper"><?php echo file_get_contents(get_template_directory_uri() . "/img/icons/logistics.svg"); ?>
                    <br/>Travel, Transport and Logistics</h1>
                <p class="lead no-margin">Fipra’s Travel, Transport &amp; Logistics (TTL) practice, lead by <a
                        href="#">Ukko Metsola</a>, is composed of experienced staff and Special Advisers with diverse expertise in the policies and regulatory frameworks that affect the industries within the sector.  We aim to help deliver bottom-line savings, or reduced regulatory risks and costs, to our clients.</p>
            </div>
        </div>
    </div>

    <div class="page-nav">
        <div class="row content-area">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title menu-title-toggle"><i class="icon-menu-1"></i> Jump to...</li>
                <li class="hide-s"><a class="jump-to-link" href="#staff-menu-container">Practice Staff <i class="icon-down-open"></i></a></li>
                <li class="hide-s hide-m"><a class="jump-to-link" href="#practice-lead">Practice Lead <i class="icon-down-open"></i></a></li>
                <li class="hide-s"><a class="jump-to-link" href="#expertise-menu-container">More of our Expertise <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
    </div>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary">
                <main id="main" class="site-main" role="main">

                    <p>Since 2000, Fipra’s Transport, Travel and Logistics practice  has supported a large
                        number of clients at different levels of political decision-making. We have a proven track
                        record of working closely and constructively with political and regulatory bodies including
                        national Governments (also at Regional and Local Government) in countries around the world, including vis-à-vis the Institutions of the European Union and intergovernmental organizations (e.g. International Maritime Organisation, World Trade Organisation).</p>

                    <p>Through Fipra’s Global Network and our network of <a href="#">Special Advisers</a> we are able
                        to devise and execute effective ‘one-stop-shop’ campaigns across multiple jurisdictions. We
                        regularly serve as an extension to some of the world’s largest companies’ in-house government
                        affairs teams. Fipra provides across-the-board Public Affairs services to our clients to help
                        ensure they are able to navigate complex policy and regulatory issues quickly and effectively.
                        We are also used to working closely with leading law firms, management consultancies and PR
                        firms retained by our clients, as well as with colleagues from elsewhere in the public affairs
                        industry.</p>

                    <p>Current and prior clients come from aviation, rail, road freight, maritime, cruising, express
                        services, private for-hire transport and other industries within the sector. Our long-lasting
                        partnership with a number of clients is a testimony to our ability to continuously generate a
                        positive return on our clients’ investment through Fipra.</p>

                    <p>As part of our work on transportation policies, we have also worked extensively on related
                        environmental policies and issues, particularly in the political context of the European Union
                        and the EU institutions in Brussels and Strasbourg.</p>

                    <p>As a result of the range and diversity of our clients in the transportation industries, Fipra is
                        well placed to identify patterns in the overall threats and opportunities that organisations
                        face and to assist pro-actively with the creation of industry or issue-specific alliances
                        between like-minded organisations.</p>

                    <p>We are experts in political and regulatory processes. Where requested, Fipra is also
                        well-positioned to assist with complimentary media support services, including drafting of press
                        releases, arranging interviews with leading media outlets, and assist clients in preparing for
                        press conferences.</p>

                    <p>To learn more about how Fipra’s TTL team can support you please contact <a href="#">Ukko Metsola</a>.</p>


                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary">

                <aside class="sidebar-contacts-container">
                    <h5 id="practice-lead">Practice Lead</h5>

                    <div class="sidebar-contacts-group">
                        <div class="sidebar-contact">
                            <div class="sidebar-contact-content">
                                <a href="/expertise-area">
                                    <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko_metsola.png" alt="Ukko Metsola" style="background-color: white;" />
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

                    </div>
                </aside>

                <aside>
                    <h5 id="languages">Languages</h5>
                    <ul class="languages-list no-bottom-margin no-bullet">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/finland.png" class="languages-list-flag tooltip" alt="Finnish" title="Finnish"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/united-kingdom.png" class="languages-list-flag tooltip" alt="English" title="English"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/sweden.png" class="languages-list-flag tooltip" alt="Swedish" title="Swedish"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/france.png" class="languages-list-flag tooltip" alt="French" title="French"/></li>
                    </ul>
                </aside>

                <aside>
                    <h5>Sidebar title</h5>
                    <p>More sidebar blocks can be added here, controlled in the CMS.</p>
                </aside>
            </div><!-- #secondary -->

        </div><!-- #content -->
    </div><!-- #site-content-container -->

    <section id="team-menu-container" class="full-width-block-container collapse">
        <div class="full-width-block-content-container light-grey">

            <div class="full-width-block-content">
                <h3 id="staff" class="upper small center">Practice Staff</h3>

                <div id="practice-staff-carousel" class="team-carousel with-controls" data-number-of-items="12">
                    <?php for($i = 1; $i <= 3; $i++): ?>
                        <div class="team-member">
                            <div class="profile-photo">
                                <a href="#"> <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko_metsola.png" alt="Ukko Metsola" style="width:200px;" /></a>
                            </div>
                                <h4 class="no-bottom-margin"><a href="#">Name Surname</a></h4>
                            <h6>Position, Fipra Unit</h6>
                        </div>
                        <div class="team-member">
                            <div class="profile-photo">
                                <a href="#"> <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ann_kelly.png" alt="Ann Kelly" style="width:200px;" /></a>
                            </div>
                            <h4 class="no-bottom-margin"><a href="#">Name Surname</a></h4>
                            <h6>Position, Fipra Unit</h6>
                        </div>
                        <div class="team-member">
                            <div class="profile-photo">
                                <a href="#"> <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ilari_marzano.png" alt="Ilari Marzano" style="width:200px;" /></a>
                            </div>
                            <h4 class="no-bottom-margin"><a href="#">Name Surname</a></h4>
                            <h6>Position, Fipra Unit</h6>
                        </div>
                        <div class="team-member">
                            <div class="profile-photo">
                                <a href="#"> <img src="<?= get_template_directory_uri(); ?>/img/fipriots/jana_marco.png" alt="Jana Marco" style="width:200px;" /></a>
                            </div>
                            <h4 class="no-bottom-margin"><a href="#">Name Surname</a></h4>
                            <h6>Position, Fipra Unit</h6>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise-menu-container" class="full-width-block-container collapse">
        <div class="full-width-block-content-container dark-grey">
            <div class="full-width-block-content">
                <h3 id="expertise-menu" class="upper small center">Our Expertise</h3>

                <div id="expertise-carousel" class="with-controls" data-number-of-items="7">
                    <?php $expertise_areas = [
                        ['title' => 'Banking and Financial Services', 'svg' => 'coins'],
                        ['title' => 'Chemical, Industrials and Mining', 'svg' => 'gears'],
                        ['title' => 'Energy and Environment', 'svg' => 'windmill'],
                        ['title' => 'Healthcare and Pharma', 'svg' => 'heart'],
                        ['title' => 'Telecoms, Media and Technology', 'svg' => 'monitor'],
                        ['title' => 'Travel, Transport and Logistics', 'svg' => 'logistics'],
                        ['title' => 'Competition Policy', 'svg' => 'podium']
                    ] ?>
                    <?php for($i = 0; $i <= 6; $i++): ?>
                        <div class="expertise-area center">
                            <a href="#">
                                <div class="svg-icon"><?php echo file_get_contents(get_template_directory_uri() . "/img/icons/" . $expertise_areas[$i]['svg'] . ".svg"); ?></div>
                                <div class="expertise-area-name"><?= $expertise_areas[$i]['title'] ?></div>
                            </a>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>
        </div>
    </section>

</div><!-- #content-container   -->

<?php get_footer(); ?>
