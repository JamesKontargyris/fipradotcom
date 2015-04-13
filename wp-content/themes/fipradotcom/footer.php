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
                <option value="1">Option One</option>
                <option value="2">Option Two</option>
                <option value="3">Option Three</option>
            </select>
        </div>
    </div>

    <div id="footer-container">
        <footer id="colophon" class="site-footer" role="contentinfo">

            <div class="footer-section">Footer Section 1</div>
            <div class="footer-section">Footer Section 2</div>
            <div class="footer-section">Footer Section 3</div>

        </footer><!-- #colophon -->

    </div>
    <div id="site-info-container">
        <div class="site-info">
            Copyright notice
        </div><!-- .site-info -->
    </div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
