<!-- This file contains the markup for the footer -->

<footer>
    <div class="site-width site-margin footer-content top-spacing-s bottom-spacing-l">
        <!-- First column of the footer -->
        <div class="col">
            <div class="image footer-logo">
                <a href="/">  <!-- / takes the user back to the front page -->
                    <img src="<?= get_template_directory_uri(); ?>/images/header-icons/logo2.svg" alt="">
                    <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                </a>
            </div>
        </div>

        <!-- Second column of the footer -->
        <div class="col">
            <p>Moe&Aalsing</p>
            <p>Lupinvej 12</p>
            <p>2670 Greve</p>

            <p class="top-spacing-s">kontakt@moeogaalsing.dk</p>
            <p>+ 45 22 30 60 40</p>

            <p class="top-spacing-s">CVR 38965603</p>

            <div class="socials flex top-spacing-s">
                <a class="image" href="https://www.facebook.com/MoeogAalsing" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="">
                    <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                </a>
                <!--Icon fra Figma plugin Iconduck,  Creative Commons Attribution 4.0 International, https://iconduck.com/icons/11044/facebook-->
                <a class="image" href="https://www.instagram.com/moeaalsing/" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/images/instagram-icon.svg" alt="">
                    <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                </a>
                <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/icons/26788/instagram-with-circle -->
                <a class="image" href="https://www.tiktok.com/@moeogaalsing" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/images/tiktok-icon.svg" alt="">
                    <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                </a>
                <!--Icon fra Figma plugin Iconduck,Creative Commons Zero v1.0 Universal,https://iconduck.com/icons/81292/tiktok -->
            </div>
        </div>

        <!-- Third column of the footer -->
        <nav class="col">
            <?php
            wp_nav_menu(array( // wp_nav_menu() displays navigation menu. Link to documentation: https://developer.wordpress.org/reference/functions/wp_nav_menu/
                'theme_location' => 'footerNav'
            ));
            ?>
        </nav>

        <!-- Fourth column of the footer -->
        <div class="shipping-payment-section col">
            <div>
                <p>Leveringsmuligheder</p>
                <div class="image shipping-payment-logo">
                    <!-- Icon from https://gls-group.com/DK/da/gls-logo -->
                    <img src="<?= get_template_directory_uri(); ?>/images/gls-logo.svg" alt="">
                    <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                </div>
            </div>

            <div>
                <p>Betalingsmuligheder</p>
                <div class="image">
                    <!-- Icons from Figma plugin Iconduck, Mozilla Public License 2.0, https://iconduck.com/icons/71121/mastercard, https://iconduck.com/icons/71119/maestro & https://iconduck.com/icons/71125/visa -->
                    <img src="<?= get_template_directory_uri(); ?>/images/payment-icons.png" alt="">
                    <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?> <!-- wp_footer() prints data or scripts before the closing body tag. Also displays the admin panel when you're logged in. Link to documentation: https://developer.wordpress.org/reference/hooks/wp_footer/ -->
</body>
</html>