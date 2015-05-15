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

    <div id="hero" class="full-width-block-container our-people grey">
        <div class="full-width-block-content-container flex">
            <div class="full-width-block-content center narrow">
                <h1 class="upper no-margin">Our People</h1>
<!--                <p class="lead no-margin">Maecenas vehicula tellus at nisi semper laoreet. Donec sed rhoncus mi, ut gravida libero. Fusce tellus metus, dapibus at elit ac, viverra faucibus enim. Donec luctus velit erat, eget pellentesque sapien iaculis in.</p>-->
            </div>
        </div>
    </div>

    <div class="page-nav dark-grey">
        <div class="row content-area">
            <div class="col-6-m no-margin">
                <ul class="anchor-links-list no-margin no-bullet">
                    <li class="menu-title"><i class="icon-menu-1"></i> Filter by</li>
                    <li class="hide-s"><a href="#" class="filter-group-trigger" data-filter-group="#expertise-filter-group">Expertise Area <i class="icon-down-open"></i></a></li>
                    <li class="hide-s"><a href="#" class="filter-group-trigger">Country <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
            <div class="col-6-m no-margin" style="text-align: right">
<!--                <input type="text"/>-->
            </div>
        </div>
    </div>

    <div id="expertise-filter-group" class="page-nav with-padding dark-grey filter-group hide">
        <div class="row content-area">
            <div class="filter-list-container">
                <ul class="filter-list no-margin no-bullet">
                    <li><a href="#" class="filter" data-filter=".banking-and-financial-services">Banking and Financial Services</i></a></li>
                    <li><a href="#" class="filter" data-filter=".chemical-industrials-and-mining">Chemical, Industrials and Mining</a></li>
                    <li><a href="#" class="filter" data-filter=".energy-and-environment">Energy and Environment</a></li>
                    <li><a href="#" class="filter">Healthcare and Pharma</a></li>
                    <li><a href="#" class="filter">Telecoms, Media and Technology</a></li>
                    <li><a href="#" class="filter">Travel, Transport and Logistics</a></li>
                    <li><a href="#" class="filter">Competition Policy</a></li>
                </ul>
            </div>
        </div>
    </div>



    <div id="site-content-container">

        <div id="content" class="site-content site-content-our-people">

            <div id="primary" class="full-width">
                <main id="main" class="site-main" role="main">
                    <a href="#" class="clear-filter">Reset Filters</a>
                    <div class="people-selector-container">

                        <div class="people-group">

                                <?php for($i = 1; $i <= 5; $i++): ?>
                                <div class="person banking-and-financial-services">
                                    <div class="person-profile-photo">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Position, Fipra Unit</h6>
                                        <div class="btn-container">
                                            <a href="#" class="btn">
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

                                            <br/><a href="#" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person chemical-industrials-and-mining">
                                    <div class="person-profile-photo">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Position, Fipra Unit</h6>
                                        <div class="btn-container">
                                            <a href="#" class="btn">
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

                                            <br/><a href="#" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person energy-and-environment">
                                    <div class="person-profile-photo">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/img/fipriots/ukko-metsola_thumb.gif" alt=""/>
                                        </a>
                                    </div>
                                    <div class="person-details">
                                        <h4 class="no-margin"><a href="#">Name Surname</a></h4>
                                        <h6>Position, Fipra Unit</h6>
                                        <div class="btn-container">
                                            <a href="#" class="btn">
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

                                            <br/><a href="#" class="full-profile-link">Full profile <i class="icon-right-open"></i></a>
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
