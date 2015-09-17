<?php

get_header(); ?>

<style>
    #hero {
        content:"";
        background:url('<?php echo get_template_directory_uri(); ?>/img/buildings9.jpg') center no-repeat;
        background-size:cover;
    }
</style>

<div id="content-container" class="expertise-area">

    <div id="hero" class="full-width-block-container with-content-bar">
        <div class="full-width-block-content-container content-bar grey bg-image">
            <div class="full-width-block-content center narrow">
                <h1 class="upper">About Fipra</h1>
                <p class="lead no-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eum inventore magni maxime, molestias, mollitia necessitatibus nemo, nisi placeat quia quos sequi sunt totam.</p>
            </div>
        </div>
    </div>

<!--    <div class="page-nav">-->
<!--        <div class="row content-area">-->
<!--            <ul class="anchor-links-list no-margin no-bullet">-->
<!--                <li class="menu-title menu-title-toggle"><i class="icon-menu-1"></i> Jump to...</li>-->
<!--                <li class="hide-s"><a class="jump-to-link" href="#staff-menu-container">Practice Staff <i class="icon-down-open"></i></a></li>-->
<!--                <li class="hide-s hide-m"><a class="jump-to-link" href="#practice-lead">Practice Lead <i class="icon-down-open"></i></a></li>-->
<!--                <li class="hide-s"><a class="jump-to-link" href="#expertise-menu-container">More of our Expertise <i class="icon-down-open"></i></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->

    <div id="site-content-container">

        <div id="site-content">

            <div id="primary">
                <main id="main" class="site-main" role="main">

                    <h2 class="feature">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet maxime obcaecati.</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis delectus doloremque ipsa ipsum, magnam maxime molestiae non nulla provident quae quo reiciendis velit? Ab alias deleniti deserunt dolorem ducimus eligendi eveniet excepturi fugit ipsam laboriosam magni nisi odio officia, provident quod reiciendis reprehenderit, sed soluta veritatis, vero! Ex, velit.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate dignissimos eaque excepturi fugit id iste modi neque, nesciunt nobis nulla quaerat quos repellendus sint sunt unde veniam. Autem consequuntur dignissimos doloremque illum in incidunt perferendis provident ut veniam! Alias amet atque autem commodi delectus dignissimos dolor earum enim et, exercitationem, facilis fugiat fugit in iusto labore libero magnam magni nemo pariatur perferendis, quam quas repellendus saepe suscipit tempora unde ut veritatis. Accusantium assumenda eaque exercitationem modi reiciendis, sequi temporibus.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci dolor ducimus enim ipsum, omnis quisquam repellendus repudiandae rerum? Ab consequuntur ducimus error et facilis fugiat nesciunt possimus, praesentium quis sunt? Dolor, dolores error eveniet incidunt ipsam laborum numquam odio quia saepe totam unde voluptatibus.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis delectus doloremque ipsa ipsum, magnam maxime molestiae non nulla provident quae quo reiciendis velit? Ab alias deleniti deserunt dolorem ducimus eligendi eveniet excepturi fugit ipsam laboriosam magni nisi odio officia, provident quod reiciendis reprehenderit, sed soluta veritatis, vero! Ex, velit.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate dignissimos eaque excepturi fugit id iste modi neque, nesciunt nobis nulla quaerat quos repellendus sint sunt unde veniam. Autem consequuntur dignissimos doloremque illum in incidunt perferendis provident ut veniam! Alias amet atque autem commodi delectus dignissimos dolor earum enim et, exercitationem, facilis fugiat fugit in iusto labore libero magnam magni nemo pariatur perferendis, quam quas repellendus saepe suscipit tempora unde ut veritatis. Accusantium assumenda eaque exercitationem modi reiciendis, sequi temporibus.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci dolor ducimus enim ipsum, omnis quisquam repellendus repudiandae rerum? Ab consequuntur ducimus error et facilis fugiat nesciunt possimus, praesentium quis sunt? Dolor, dolores error eveniet incidunt ipsam laborum numquam odio quia saepe totam unde voluptatibus.</p>


                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary">

                <aside>
                    <a class="btn primary btn-large full-width" href="/contact-us"><i class="icon-mail-2" style="margin-right:6px;"></i> Contact Us</a>
                </aside>

                <?php $expertise_areas = [
                    ['title' => 'Banking and Financial Services', 'svg' => 'coins'],
                    ['title' => 'Chemical, Industrials and Mining', 'svg' => 'gears'],
                    ['title' => 'Energy and Environment', 'svg' => 'windmill'],
                    ['title' => 'Healthcare and Pharma', 'svg' => 'heart'],
                    ['title' => 'Telecoms, Media and Technology', 'svg' => 'monitor'],
                    ['title' => 'Travel, Transport and Logistics', 'svg' => 'logistics'],
                    ['title' => 'Competition Policy', 'svg' => 'podium']
                ] ?>

                <aside>
                    <h5>Our Expertise</h5>
                    <ul class="sidebar-list no-bottom-margin no-bullet">
                        <?php for($i = 0; $i <= 6; $i++): ?>
                            <li><a href="#"><div class="svg-icon svg-blue margin-r"><?php echo file_get_contents(get_template_directory_uri() . "/img/icons/" . $expertise_areas[$i]['svg'] . ".svg"); ?></div> <?= $expertise_areas[$i]['title'] ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </aside>


                <aside>
                    <h5>Sidebar title</h5>
                    <p>More sidebar blocks can be added here, controlled in the CMS.</p>
                </aside>
            </div><!-- #secondary -->

        </div><!-- #content -->
    </div><!-- #site-content-container -->

</div><!-- #content-container   -->

<?php get_footer(); ?>
