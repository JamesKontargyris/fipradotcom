<?php
/**
 * The template for displaying all single posts.
 *
 * @package fipradotcom
 */

get_header(); ?>

<style>
    /*    If dark photo*/
    .full-width-block-container.our-people {
        content:"";
/*        background:url('*/<?php //echo get_template_directory_uri(); ?>/*/img/people.jpg') top no-repeat;*/
        background-size:cover;
    }
</style>

<div id="content-container">

    <div id="hero" class="full-width-block-container our-people">
        <div class="full-width-block-content-container flex light-grey">
            <div class="full-width-block-content center narrow">
                <h1 class="upper">Our People</h1>
                <p class="no-margin">Maecenas vehicula tellus at nisi semper laoreet. Donec sed rhoncus mi, ut gravida libero. Fusce tellus metus, dapibus at elit ac, viverra faucibus enim. Donec luctus velit erat, eget pellentesque sapien iaculis in.</p>
            </div>
        </div>
    </div>

    <div class="page-nav grey">
        <div class="row content-area">
            <div class="col-6-m no-margin">
                <ul class="anchor-links-list no-margin no-bullet">
                    <li class="menu-title">Filter by</li>
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#expertise-filter-group">Expertise Area <i class="icon-down-open"></i></a></li>
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#continents">Country <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
            <div class="col-6-m no-margin" style="text-align: right">
<!--                <input type="text"/>-->
            </div>
        </div>
    </div>

    <div class="filter-group-container">

        <div id="continents" class="page-nav filter-group grey hide">
            <div class="row content-area">
                <div class="col-8-m no-margin">
                    <ul class="anchor-links-list no-margin no-bullet">
                        <li class="menu-title">Continents</li>
                        <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#europe-filter-group">Europe <i class="icon-down-open"></i></a></li>
                        <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#asia-filter-group">Asia <i class="icon-down-open"></i></a></li>
                    </ul>
                </div>
                <div class="col-4-m no-margin" style="text-align: right">
                    <!--                <input type="text"/>-->
                </div>
            </div>
        </div>

        <div id="expertise-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <div class="filter-group-close"></div>
                    <ul class="filter-list no-margin no-bullet">
                        <li><a href="#" class="filter" data-filter=".banking-and-financial-services" data-filtering-on-text="Banking and Financial Services">Banking and Financial Services</i></a></li>
                        <li><a href="#" class="filter" data-filter=".chemical-industrials-and-mining" data-filtering-on-text="Chemical, Industrials and Mining">Chemical, Industrials and Mining</a></li>
                        <li><a href="#" class="filter" data-filter=".energy-and-environment" data-filtering-on-text="Energy and Environment">Energy and Environment</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="europe-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <div class="filter-group-close"></div>
                    <h5 class="filter-list-title">Europe</h5>
                    <ul class="filter-list no-margin no-bullet">
                        <li><a href="#" class="filter" data-filter=".country-1" data-filtering-on-text="Country 1">Country 1</i></a></li>
                        <li><a href="#" class="filter" data-filter=".country-2" data-filtering-on-text="Country 2">Country 2</a></li>
                        <li><a href="#" class="filter" data-filter=".country-3" data-filtering-on-text="Country 3">Country 3</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="asia-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <div class="filter-group-close"></div>
                    <h5 class="filter-list-title">Asia</h5>
                    <ul class="filter-list no-margin no-bullet">
                        <li><a href="#" class="filter" data-filter=".banking-and-financial-services" data-filtering-on-text="Country 4">Country 4</i></a></li>
                        <li><a href="#" class="filter" data-filter=".chemical-industrials-and-mining" data-filtering-on-text="Country 5">Country 5</a></li>
                        <li><a href="#" class="filter" data-filter=".energy-and-environment" data-filtering-on-text="Country 6">Country 6</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>




    <div id="site-content-container">

        <div id="content" class="site-content site-content-our-people">

            <div id="primary" class="full-width">
                <main id="main" class="site-main" role="main">

<!--                    Used by jQuery to update filtering-on-title when clear filter button is clicked -->
                    <div class="hide-s hide-m number-of-fipriots">20</div>

                    <div class="filtering-on-container">
                        <h4 class="no-margin filtering-on-title">Showing all 20 Fipriots</h4>
                        <a href="#" class="btn btn-small secondary clear-filter hide"><i class="icon-cancel-1"></i> Clear Filter</a>
                    </div>

                    <div class="people-group-container">

                        <div class="people-group">

                                <?php for($i = 1; $i <= 4; $i++): ?>
                                <div class="person banking-and-financial-services country-3">
                                    <div class="person-profile-photo">
                                        <a href="/profile">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Country 3, Banking and Financial Services</h6>
                                        <div class="btn-container">
                                            <a href="/profile" class="btn">
                                               <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                            </a>
                                        </div>
                                        <div class="person-contact-details">
                                            <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td>Tel</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Fax</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><a href="mailto:name.surname@fipra.com">name.surname@fipra.com</a> </td>
                                                </tr>
                                            </table>

                                            <br/><a href="/profile" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person chemical-industrials-and-mining country-2">
                                    <div class="person-profile-photo">
                                        <a href="/profile">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Country 2, Chemical, Industrials and Mining</h6>
                                        <div class="btn-container">
                                            <a href="/profile" class="btn">
                                               <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                            </a>
                                        </div>
                                        <div class="person-contact-details">
                                            <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td>Tel</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Fax</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><a href="mailto:name.surname@fipra.com">name.surname@fipra.com</a> </td>
                                                </tr>
                                            </table>

                                            <br/><a href="/profile" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person energy-and-environment country-1">
                                    <div class="person-profile-photo">
                                        <a href="/profile">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Country 1, Energy and Environment</h6>
                                        <div class="btn-container">
                                            <a href="/profile" class="btn">
                                               <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                            </a>
                                        </div>
                                        <div class="person-contact-details">
                                            <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td>Tel</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Fax</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><a href="mailto:name.surname@fipra.com">name.surname@fipra.com</a> </td>
                                                </tr>
                                            </table>

                                            <br/><a href="/profile" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person energy-and-environment country-3">
                                    <div class="person-profile-photo">
                                        <a href="/profile">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Country 3, Energy and Environment</h6>
                                        <div class="btn-container">
                                            <a href="/profile" class="btn">
                                                <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                            </a>
                                        </div>
                                        <div class="person-contact-details">
                                            <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td>Tel</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Fax</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><a href="mailto:name.surname@fipra.com">name.surname@fipra.com</a> </td>
                                                </tr>
                                            </table>

                                            <br/><a href="/profile" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person banking-and-financial-services country-2">
                                    <div class="person-profile-photo">
                                        <a href="/profile">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Country 2, Banking and Financial Services</h6>
                                        <div class="btn-container">
                                            <a href="/profile" class="btn">
                                                <div class="btn-text"><i class="icon-right-circle-1"></i></div>
                                            </a>
                                        </div>
                                        <div class="person-contact-details">
                                            <table class="no-style" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td>Tel</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td>Fax</td>
                                                    <td>+01 2 34 56 78 90</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><a href="mailto:name.surname@fipra.com">name.surname@fipra.com</a> </td>
                                                </tr>
                                            </table>

                                            <br/><a href="/profile" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>

                            </div>
                    </div>

                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- #content -->
    </div><!-- #site-content-container -->

</div><!-- #content-container   -->

<?php get_footer(); ?>
