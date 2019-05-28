<?php
/**
 * The template for displaying pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package fipradotcom
 */


get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('inc/breadcrumbs'); ?>

    <div id="content-container" class="<?= str_replace(' ', '-', strtolower(get_the_title())); ?> ep-election-analysis">

        <div class="hero-container">

            <div class="hero__grey-block"> </div>
            <img class="hero__ep-logo" src="<?php echo get_template_directory_uri(); ?>/img/ep-logo-white.png" alt="European Parliament Logo">

            <div class="hero">
                <div class="hero__background-block"> </div>

                <div class="hero__main-title-container">
                    <h1 class="hero__main-title"><?php echo get_field('main_page_title'); ?></h1>
                </div>
            </div>

            <div class="hero-after">
                <div class="hero__sub-title-container">
                    <h4 class="hero__sub-title"><?php echo get_field('sub_page_title'); ?></h4>
                </div>
                <div class="hero__hashtag-container">
                    <h4 class="hero__hashtag">#28countries<strong>ONEnetwork</strong></h4>
                </div>
            </div>

        </div>

        <div class="ep-election-analysis-report-hero-container">
            <div class="ep-election-analysis-report-hero__mockup-background"> </div>
            <img class="ep-election-analysis-report-hero__report-cover" src="<?php echo get_template_directory_uri(); ?>/img/fipra-election-analysis-report-front-cover.jpg">
            <div class="ep-election-analysis-report-hero__content">
                <div class="ep-election-analysis-report-hero__content__skewed-background"> </div>
                <div class="ep-election-analysis-report-hero__title">Fipra Pan-EU Election Analysis</div>
                <div class="ep-election-analysis-report-hero__description">
                    <p class="lead-paragraph">Fipra and its Network of Units across the EU28 have compiled a full country-by-country analysis of the outcome of the elections highlighting some of the new movers and shakers for the 2019-2024 EU legislature.</p>

                    <p>The 2019 European Parliament elections are the most important EU-wide elections ever to have taken place. With an overall turn-out of over 50% of voters across the EU as a whole, the highest 25 years, the elections have taken place at a time of considerable uncertainty about the European project, focusing more than ever before on very different views about what the EU should be – pitting the main, pro-EU centrist parties against a range of populist, green, right-wing and left-wing critics – who all want to see major changes.</p>
                </div>
                <a href="#" class="btn primary btn-large btn-white ep-election-analysis-report-hero__button">Download the report</a>
                <p>For more information feel free to reach out to <a href="mailto:eptaskforce@fipra.com">eptaskforce@fipra.com</a></p>
            </div>
        </div>


            <div id="site-content-container">

                <div id="site-content">

                    <div class="ep-election-analysis-tabbed-content">
                        <div class="ep-election-analysis-tabbed-content__tab-group">
                            <a href="#" class="ep-election-analysis-tab" data-target-tab=".ep-election-analysis-tab-content--news-and-analysis">News and Analysis</a>
                            <a href="#" class="ep-election-analysis-tab" data-target-tab=".ep-election-analysis-tab-content--review-back-issues">Previous reviews</a>
                        </div>
                        <div class="ep-election-news-and-analysis-container ep-election-analysis-tab-content ep-election-analysis-tab-content--news-and-analysis">
                            <div class="ep-election-news-and-analysis__content">
                                <p class="lead-paragraph">The 2019 European Parliament elections are the most important EU-wide elections ever to have taken place. Previous European Parliament elections have tended to attract a relatively low turn-out of voters and have often been as much about domestic issues as European ones.</p>

                                <p>These elections have been different. With a projected overall turn-out of over 50% of voters across the EU as a whole, the highest for 25 years, the elections have taken place at a time of considerable uncertainty about the European project, focusing more than ever before on very different views about what the EU should be – pitting the main, pro-EU centrist parties against a range of populist, green, right-wing and left-wing critics, who all want to see major changes.</p>

                                <p>Consequently, much of the initial focus has been on the success of the Populist and non-centrist parties, to a greater extent than seen before in any EU-wide vote. From the success of the National Rally in France, beating President Macron’s centrist group into second place, the record high result for the right-wing Lega party in Italy, to the victories of the national-conservative parties in Hungary and Poland, or indeed the first-place finish of the new Brexit Party in the UK – still an EU Member State at least for now – the populist and Eurosceptic parties have never had a better result.</p>

                                <p>Yet in the overall analysis, despite these successes, the main result of these elections is that the centre has held. The previous joint dominance of the centre-right European People’s Party (EPP) and Progressive Alliance of Socialists and Democrats (S&D) may have ended, but the EPP remains the largest group in the new Parliament – and the success of the strongly pro-EU Alliance of Liberals and Democrats for Europe (ALDE) provides the basis for renewed centrist control over the Parliament, even if with some changes.</p>

                                <p>The biggest story from the elections is the rise of the populist and non-centrist parties and the ending of the previous EPP/S&D control over the European Parliament. Yet looked at more closely, the results show a less fundamental change that some reports may have suggested.</p>

                                <p>The centre-right parties across Europe have lost ground compared to the previous elections in 2014, particularly in Germany, France and Spain – yet the EPP remains the single largest group. The S&D Group is also diminished, with a particularly poor performance in Germany, but reports of its demise have proved premature, with a relatively strong showing in Spain, Portugal and Denmark. The National Rally may have secured first place in France, but President Macron’s centrist group did not even exist at the time of the last elections – and his second place, together with relatively good results for liberal parties elsewhere, gives ALDE the balance of power in the new Parliament.</p>

                                <p>Taken together with the relatively strong performance of the Greens, far from being the end for the pro-EU parties, these results are in fact more likely to see ALDE joining forces with the EPP and S&D to push for a renewed set of pro-EU policies, in defiance of the populists, Eurosceptics, and far-right and far-left parties, who although considerable in number collectively, are often coming from very different political perspectives and unable to agree a common approach in the Parliament. Already we have seen ALDE’s leader, Guy Verhofstadt, welcome the results as “historic” and vow to use his Group’s increased influence to push for a “more ambitious Europe”.</p>

                                <p>What might this mean in practice ?</p>

                                <p>There will have to be some changes, with ALDE pushing for more influence over the top positions in the Parliament and in the EU institutions. With EU leaders due to meet almost immediately after the elections, one early consequence is likely to be the end of the so-called ‘spitzenkandidat’ system, under which the European Parliament has insisted that the Presidency of the European Commission must go to the candidate of whichever political group comes first in the elections. Strongly disliked by a number of EU leaders, this is unlikely to be supported by ALDE, leaving it without a majority in the Parliament, opening up the options for the next Commission President.</p>

                                <p>On policy issues, a less controllable Parliament implies a more limited agenda. Even relatively modest rebellions by national factions within the EPP, S&D and ALDE groups on particular policy issues could deprive them of their overall majority. However, with the support of the Greens, there is likely to be a renewed push on at least some EU policy agendas, notably for stronger energy and environmental measures, such as the proposed zero emissions target by 2050, as well as renewed demands for more EU-wide taxation powers, including in the digital sector. Demands for a Eurozone-only budget and additional common spending will also continue.</p>

                                <p>By contrast, the Greens may find allies in demanding tougher criteria on labour and environmental standards in any EU trade agreements and opposing any EU-US trade agreement that could lead to greatly increased market access for US goods or the use of investor dispute settlement procedures. Franco-German led plans for reforms to EU industrial and competition policy to favour selected ‘European champions’ may also be difficult to push through.</p>

                                <p>As for the Populists, their demands and priorities differ widely, but pressure for more flexibility over the existing EU fiscal rules may at least be considered, as other countries, notably France, struggle to remain within the current limits. Although strongly opposed by the Greens and some others, tougher controls over migration and policing of the EU’s borders may also be considered by EU leaders in the wake of the elections, in order to stem the appeal of the populist right.</p>

                                <p>There will be other, more immediate political consequences in some of the individual Member States. The expected poor showing of the Conservative Party in the UK helped force the recent resignation of the British Prime Minister and is likely to boost the chances of a new more Eurosceptic party leader being appointed in the coming weeks. In Greece, elections have already been called, following the poor showing of the governing Syriza party. The continuing decline of the once dominant SPD in Germany, now the junior partner in the current coalition Government, may in time lead to elections there also. On the other hand, despite the success of Lega in Italy, new elections there seem unlikely given the indifferent performance of its Five Star coalition partner.</p>

                                <p>Fipra is following the election results closely and we will be compiling a full country-by-country analysis of both the outcome of the elections and their implications.</p>

                                <p>For more information, please contact us on <a href="mailto:eptaskforce@fipra com" style="color:white; font-weight:bold;">eptaskforce@fipra com</a></p>
                            </div>
                        </div>

                        <div class="ep-election-review-back-issues-container ep-election-analysis-tab-content ep-election-analysis-tab-content--review-back-issues">
                            <div class="ep-election-review-back-issues__content">
                                <ul class="ep-election-review-back-issues__gallery">
                                    <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_may_2019.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> May 2019</a></li>
                                    <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_april_2019.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> April 2019</a></li>
                                    <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_january_2019.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> January 2019</a></li>
                                    <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_november_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> November 2018</a></li>
                                    <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_october_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> October 2018</a></li>
                                    <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_september_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> September 2018</a></li>
                                    <li><a href="<?php echo get_template_directory_uri(); ?>/files/ep_elections_reviews/fipra_2019_european_elections_review_july_2018.pdf" target="_blank"><img class="ep-election-review-back-issues__icon" src="<?php echo get_template_directory_uri();  ?>/img/icons/file-download-solid.svg" alt="Download"> July 2018</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div><!-- #site-content -->
            </div><!-- #site-content-container -->

    </div><!-- #content-container   -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
