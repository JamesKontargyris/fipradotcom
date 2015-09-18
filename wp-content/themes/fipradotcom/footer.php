<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fipradotcom
 */
?>

    </div> <!-- #content-->

    <div id="footer-global-network-container">
        <div id="footer-global-network">
            <label for="footer-global-network">Explore&nbsp;our&nbsp;Network:</label>
            <div class="select-wrapper">
                <select name="footer-global-network" id="footer-global-network">
                    <option value="">Please select...</option>

                    <?php
                    $continents = get_terms('continent', 'hide_empty=0');
                    foreach( $continents as $continent ) :
                        ?>
                        <optgroup label="<?= $continent->name ?>">

                            <?php $continent_units = get_units_by_continent($continent->term_id); ?>
                            <?php while ( $continent_units->have_posts() ) : $continent_units->the_post(); ?>
                                <option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
                            <?php endwhile; ?>

                        </optgroup>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>

    <div id="footer-container">
        <footer id="colophon" class="site-footer" role="contentinfo">

            <div class="footer-section">
                <h5>About Us</h5>
                <p>Founded in 2000, Fipra is today the leading and most extensive global public affairs consultancy network, advising clients on a range of government relations and regulatory policy issues. </p>
                <p><a href="/about-fipra" class="btn secondary btn-white btn-small">Find out more</a></p>
            </div>
            <div class="footer-section">
                <h5>Browse</h5>

                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'depth' => '1')); ?>
            </div>
            <div class="footer-section">
                <h5>Get in Touch</h5>
                <address>
                    Fipra International<br/>
                    Rue de la Loi 227<br/>
                    1040 Brussels<br/>
                    Belgium<br/>
                    <a href="http://maps.google.co.uk/maps?hl=en&q=rue%20de%20la%20loi%20227&um=1&ie=UTF-8&sa=N&tab=wl" target="_blank">Map</a><br/><br/>
                    Tel.: +32 2 613 2828<br/>
                    Fax: +32 2 613 2849<br/>
                </address>
                <p><a class="btn primary btn-white btn-small" href="/contact-us">Contact Us</a></p>
            </div>

        </footer><!-- #colophon -->

    </div>
    <div id="site-info-container">
        <div class="site-info">
            <div class="footer-copyright">
                &copy; <?php echo date("Y"); ?> Fipra International Ltd. All Rights Reserved. <br/>
                <a href="#">Legal Link 1</a> | <a href="#">Legal Link 2</a> | <a href="#">Legal Link 3</a>
            </div>
            <div class="footer-social-links">
                <strong>Connect with us</strong><br/> <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-linkedin"></i></a>
            </div>
        </div><!-- .site-info -->
    </div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
