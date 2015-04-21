<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fipradotcom
 */
?>

    <div id="footer-global-network-container">
        <div id="footer-global-network">
            <div class="title">Explore our Global Network:</div>
            <select name="footer-global-network" id="footer-global-network">
                <option value="">Please select...</option>
                <optgroup label="Continent Name">
                    <option value="1">Country Name</option>
                    <option value="2">Country Name</option>
                    <option value="3">Country Name</option>
                </optgroup>
            </select>
        </div>
    </div>

    <div id="footer-container">
        <footer id="colophon" class="site-footer" role="contentinfo">

            <div class="footer-section">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque a iaculis nisi. Phasellus et libero non quam tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                <p><a href="#" class="btn secondary">Find out more</a></p>
            </div>
            <div class="footer-section">
                <h5>Browse</h5>
                <ul class="no-bullet no-v-spacing">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Fipra</a></li>
                    <li><a href="#">What We Do</a></li>
                    <li><a href="#">Our People</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Explore our Global Network</a></li>
                </ul>
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
                <p><a class="btn primary" href="#">Contact Us</a></p>
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
