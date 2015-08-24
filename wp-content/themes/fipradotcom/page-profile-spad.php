<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<div id="content-container">

    <?php get_template_part('inc/breadcrumbs'); ?>

    <div id="hero" class="full-width-block-container with-content-bar content-bar-bottom profile">
        <div class="full-width-block-content-container content-bar grey">
            <div class="full-width-block-content left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fipriots/juan_prat_y_coll.png" alt="Juan Prat y Coll"/>
                <h1 class="upper no-margin">Juan Prat y Coll</h1>
                <h4 class="no-top-margin">Special Adviser, International Affairs</h4>
                <a class="btn primary" href="mailto:juan.pratcoll@fipra.com">Contact Juan</a>
            </div>
        </div>
    </div>

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary" class="profile-content-area">
                <main id="main" class="site-main" role="main">

                    <p class="lead">Juan Prat y Coll is a former senior government official and joined Fipra in May 2013 as Special Adviser for International Affairs.</p>

                    <p>Juan uniquely combines very distinguished diplomatic, civil service and European Commission careers. Ambassador Prat y Coll's long civil service career began in 1969 and included postings to Ecuador, the USSR, South Korea, Morocco as well as the Spanish Ambassadorships to Italy, the Netherlands, NATO and the Organisation for the Prohibition of Chemical Weapons. In the Spanish Administration, Juan is a former Director General for International Fisheries.</p>

                    <p>More recently Juan served as Ambassador at large for Mediterranean Affairs and prior to joining Fipra, as the representative of Catalonia to the European Union. Juan's service at the European Commission included several senior posts such as Director General External Relations in the European Commission, in charge of Mediterranean and Middle Eastern Affairs, Latin America and South East Asia.</p>

                    <p>Juan has written many publications on the European Union, Mediterranean Policy, Latin American relations, Security and Defence. Juan speaks Spanish, Catalan, English, French and Italian and has a good knowledge of German, Dutch and Russian.</p>


                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary">
                <aside>
                    <h5 id="contact">Contact Juan</h5>
                    <div class="row">
                        <div class="col-6-xs col-12-xxs no-bottom-margin">
                            <address>
                                Fipra International <br/>
                                Rue de la Loi 227 <br/>
                                Brussels <br/>
                                1040 <br/>
                                Belgium
                            </address>
                        </div>
                        <div class="col-6-xs col-12-xxs no-bottom-margin">
                            <address class="no-bottom-margin">
                                <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td>Tel</td>
                                        <td>+32 2 613 2828</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td>+32 485 846 088</td>
                                    </tr>
                                    <tr>
                                        <td>Fax</td>
                                        <td>+32 2 613 2849</td>
                                    </tr>
                                </table>
                                <a href="mailto:juan.pratcoll@fipra.com">juan.pratcoll@fipra.com</a>
                            </address>
                        </div>
                    </div>
                </aside>

                <aside>
                    <h5 id="languages">Languages Spoken</h5>
                    <ul class="languages-list no-bottom-margin no-bullet">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/spain.png" class="languages-list-flag tooltip" alt="Spanish" title="Spanish"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/united-kingdom.png" class="languages-list-flag tooltip" alt="English" title="English"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/italy.png" class="languages-list-flag tooltip" alt="Italian" title="Italian"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/france.png" class="languages-list-flag tooltip" alt="French" title="French"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/germany.png" class="languages-list-flag tooltip" alt="German" title="German"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/netherlands.png" class="languages-list-flag tooltip" alt="dutch" title="dutch"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/flags/russia.png" class="languages-list-flag tooltip" alt="Russian" title="Russian"/></li>
                    </ul>
                </aside>

            </div><!-- #secondary -->

        </div><!-- #content -->

    </div>
</div><!-- #content-container   -->

<?php get_footer(); ?>
