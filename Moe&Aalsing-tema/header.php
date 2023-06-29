<!DOCTYPE html>
<!-- language_attributes() sets the site language as the language chosen for the WordPress site. Documentation: https://developer.wordpress.org/reference/functions/language_attributes/ -->
<html <?php language_attributes(); ?>>
<head>
    <!-- Sets charset to used charset. Documentation: https://developer.wordpress.org/reference/functions/bloginfo/ -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Prints scripts or data in the head tag. Documentation: https://developer.wordpress.org/reference/hooks/wp_head/  -->
    <script defer
            src="https://kit.fontawesome.com/3e2b14549d.js"
            crossorigin="anonymous"
    ></script>
</head>

<!-- body_class() addes different classes to the body tag, depending on the page you're on. For example logged_in if the user is logged in. Documentation: https://developer.wordpress.org/reference/functions/body_class/ -->
<body <?php body_class(); ?>>
<!-- Header code inspired by: https://codepen.io/tamas_dukai/pen/abqVeOr -->
<header class="header">
    <section id="facebookBanner">
        <a href="https://moeogaalsing.josefinej.dk/facebook-instagram-live/" class="facebookBanner">
            <p>Se vores Facebook & Instagram Live - Hver onsdag kl. 20.00</p>

            <div onclick="fjernBanner()"><i class="fa-solid fa-xmark"></i></div>
        </a>
    </section>
    <a class="headerlogo" href="https://moeogaalsing.josefinej.dk/"><img
                src="<?= get_template_directory_uri(); ?>/images/header-icons/logo2.svg"
                alt="Moe og Aalsings logo"/></a>
    <nav id="myHeader">
        <div class="header-row container" role="navigation" aria-label="Main">
            <div class="header-middle">
                <ul class="main-menu">
                    <li class="menu-item mega-menu">
                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/">Tøj <i
                                    class="fa-solid fa-chevron-down"></i></a>
                        <div class="mega-menu-wrapper slideInUp">
                            <div class="mega-menu-col">
                                <div class="streg"></div>
                                <ul class="mega-sub-menu">
                                    <li><a href="https://moeogaalsing.josefinej.dk/product-category/toej/"
                                           class="highlightedLabel">Tøj</a></li>
                                    <li><a href="#">Nyheder</a></li>
                                    <li><a href="#">Populære</a></li>
                                    <li><a href="#">Udsalg</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li>
                                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/blazere/">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/blazer.svg"
                                                 alt="Blazer ikon"/>
                                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                                            Blazere</a>
                                        <!--Icon fra Figma plugin Iconduck, Apache License 2.0, https://iconduck.com/icons/7764/clothes-suit -->

                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/toppe.svg"
                                                 alt="toppe ikon"/> Toppe</a>
                                        <!--Icon fra Figma plugin Iconduck, Reshot License, https://iconduck.com/icons/213061/tanktop -->

                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/skjorter.svg"
                                                 alt="skjorte ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Apache License 2.0, https://iconduck.com/icons/10651/shirt-->
                                            Skjorter</a>
                                    </li>
                                    <li>
                                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/bluser/">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/bluser.svg"
                                                 alt="bluser ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Apache License 2.0, https://iconduck.com/icons/10702/t-shirt-->
                                            Bluser</a>
                                    </li>
                                    <li>
                                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/kjoler/">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/kjoler.svg"
                                                 alt="kjole ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/emojis/41158/dress-->
                                            Kjoler</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/buksedragter.svg"
                                                 alt="buksedragter ikon"/>
                                            <!--Icon fra figma plugin Iconduck, Reshot License, https://iconduck.com/icons/206683/protective-clothing-->
                                            Buksedragter</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/bukser.svg"
                                                 alt="bukser ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Apache License 2.0, https://iconduck.com/icons/10748/trousers -->
                                            Bukser</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/shorts.svg"
                                                 alt="skjorter ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Apache License 2.0, https://iconduck.com/icons/10651/shirt-->
                                            Shorts</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Leggings.svg"
                                                 alt="leggings ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/emojis/44844/jeans-->
                                            Leggins</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/nederdel.svg"
                                                 alt="nederdel ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Reshot License, https://iconduck.com/icons/213050/skirt-->
                                            Nederdele</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/stromper.svg"
                                                 alt="strømper ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Apache License 2.0, https://iconduck.com/icons/10660/socks-->
                                            Strømper</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/strompebukser.svg"
                                                 alt="strømpebukser ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Reshot License, https://iconduck.com/icons/228060/compression-socks-->
                                            Strømpebukser</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/undertoj.svg"
                                                 alt="undertøj ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/emojis/41160/bikini -->
                                            Undertøj</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/jakker.svg"
                                                 alt="jakker ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Reshot License, https://iconduck.com/icons/212992/jacket-->
                                            Jakker</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Veste.svg"
                                                 alt="veste ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, MIT License, https://iconduck.com/icons/302574/jacket-->
                                            Veste</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item mega-menu">
                        <a href="https://moeogaalsing.josefinej.dk/product-category/accessories/"
                        >Accessories <i class="fa-solid fa-chevron-down"></i
                            ></a>
                        <div class="mega-menu-wrapper slideInUp">
                            <div class="mega-menu-col">
                                <div class="streg"></div>
                                <ul class="mega-sub-menu">
                                    <li><a href="https://moeogaalsing.josefinej.dk/product-category/accessories/"
                                           class="highlightedLabel">Accessoires</a></li>
                                    <li><a href="#">Nyheder</a></li>
                                    <li><a href="#">Populære</a></li>
                                    <li><a href="#">Udsalg</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Baelter.svg"
                                                 alt="bælte ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Reshot License, https://iconduck.com/icons/212941/belt -->
                                            Bælter</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/torklaeder.svg"
                                                 alt="tørklæder ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/emojis/43354/scarf-->
                                            Tørklæder</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Huer.svg"
                                                 alt="huer ikon"/>
                                            <!--Icon fra Figma plugin Iconduck,  MIT License, https://iconduck.com/icons/266774/winter-hat-fashion-thin-->
                                            Huer</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/hatte.svg"
                                                 alt="hatte ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Zero v1.0 Universal, https://iconduck.com/icons/164831/hat-3 -->
                                            Hatte</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/vanter.svg"
                                                 alt="vanter ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/emojis/43998/gardening-gloves-->

                                            Vanter</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/orering.svg"
                                                 alt="øreringe ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 3.0 International, https://iconduck.com/icons/23337/drop-earrings-->
                                            Øreringe</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/halskaeder.svg"
                                                 alt="halskæder ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 3.0 International, https://iconduck.com/icons/23614/heart-necklace-->
                                            Halskæder</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/fingerringe.svg"
                                                 alt="fingerringe ikon"/>
                                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/emojis/41821/ring-->
                                            Fingerringe</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="menu-item"><a href="#">Sko</a></li>

                    <li class="menu-item mega-menu">
                        <a href="#">Mærker <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="mega-menu-wrapper slideInUp">
                            <div class="mega-menu-col">
                                <div class="streg"></div>
                                <ul class="mega-sub-menu">
                                    <li><a href="#" class="highlightedLabel">Mærker</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li><a href="#">Fransa</a></li>
                                    <li><a href="#">Friihof+Siig</a></li>
                                    <li><a href="#">HELLO U</a></li>
                                    <li><a href="#">ICHI</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li><a href="#">KaffeClothing</a></li>
                                    <li><a href="#">Karen By Simonsen</a></li>
                                    <li><a href="#">KforKarma</a></li>
                                    <li><a href="#">MAPP JEANS</a></li>
                                    <li><a href="#">My Essential Wardrobe</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li><a href="#">SOMMERSTEDT</a></li>
                                    <li><a href="#">WIOGA</a></li>
                                    <li><a href="#">Q2</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#">Nyheder</a></li>
                    <li class="menu-item"><a href="#">Udsalg</a></li>
                </ul>
                <a href="#" id="hamburger-icon" class="mobile-toggler" aria-label="Mobile Menu">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="mobile-menu hidden slideInDown">
                <ul>
                    <li class="menu-item mega-menu">
                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/">Tøj <i
                                    class="fa-solid fa-chevron-down"></i></a>
                        <div class="mega-menu-wrapper">
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li>
                                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/blazere/">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/blazer.svg"
                                                 alt="blazer ikon"/>
                                            Blazere</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/toppe.svg"
                                                 alt="toppe ikon"/>
                                            Toppe</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/skjorter.svg"
                                                 alt="skjorter ikon"/>
                                            Skjorter</a>
                                    </li>
                                    <li>
                                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/bluser/">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/bluser.svg"
                                                 alt="bluser ikon"/>
                                            Bluser</a>
                                    </li>
                                    <li>
                                        <a href="https://moeogaalsing.josefinej.dk/product-category/toej/kjoler/">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/kjoler.svg"
                                                 alt="kjole ikon"/>
                                            Kjoler</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/buksedragter.svg"
                                                 alt="buksedragter ikon"/>
                                            Buksedragt</a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/bukser.svg"
                                                 alt="bukser ikon"/>
                                            Bukser</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/shorts.svg"
                                                 alt="shorts ikon"/>
                                            Shorts</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Leggings.svg"
                                                 alt="leggings ikon"/>
                                            Leggins</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/nederdel.svg"
                                                 alt="nederdel ikon"/>
                                            Nederdele</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/stromper.svg"
                                                 alt="strømper ikon"/>
                                            Strømper</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/strompebukser.svg"
                                                 alt="strømpebukser ikon"/>
                                            Strømpebukser</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/undertoj.svg"
                                                 alt="undertøj ikon"/>
                                            Undertøj</a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/jakker.svg"
                                                 alt="jakker ikon"/>
                                            Jakker</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Veste.svg"
                                                 alt="veste ikon"/> Veste</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li><a href="https://moeogaalsing.josefinej.dk/product-category/toej/"
                                           class="highlightedLabel">Tøj</a></li>
                                    <li><a href="#">Nyheder</a></li>
                                    <li><a href="#">Populære</a></li>
                                    <li><a href="#">Udsalg</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item mega-menu">
                        <a href="https://moeogaalsing.josefinej.dk/product-category/accessories/"
                        >Accessories <i class="fa-solid fa-chevron-down"></i
                            ></a>
                        <div class="mega-menu-wrapper">
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Baelter.svg"
                                                 alt="bælte ikon"/>
                                            Bælter</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/torklaeder.svg"
                                                 alt="tørklæder ikon"/>
                                            Tørklæder</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/Huer.svg"
                                                 alt="huer ikon"/>
                                            Huer</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/hatte.svg"
                                                 alt="hatte ikon"/>
                                            Hatte</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/vanter.svg"
                                                 alt="vanter ikon"/>
                                            Vanter</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/orering.svg"
                                                 alt="øreringe ikon"/>
                                            Øreringe</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/halskaeder.svg"
                                                 alt="halskæder ikon"/>
                                            Halskæder</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/header-icons/fingerringe.svg"
                                                 alt="fingerringe ikon"/>
                                            Fingerringe</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li><a href="https://moeogaalsing.josefinej.dk/product-category/accessories/"
                                           class="highlightedLabel">Accossories</a></li>
                                    <li><a href="#">Nyheder</a></li>
                                    <li><a href="#">Populære</a></li>
                                    <li><a href="#">Udsalg</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="menu-item"><a href="#">Sko</a></li>
                    <li class="menu-item mega-menu">
                        <a href="#">Mærker <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="mega-menu-wrapper">
                            <div class="mega-menu-col">
                                <ul class="mega-sub-menu">
                                    <li><a href="#">Fransa</a></li>
                                    <li><a href="#">Friihof+Siig</a></li>
                                    <li><a href="#">HELLO U</a></li>
                                    <li><a href="#">ICHI</a></li>
                                    <li><a href="#">KaffeClothing</a></li>
                                    <li><a href="#">Karen By Simonsen</a></li>
                                    <li><a href="#">KforKarma</a></li>
                                    <li><a href="#">MAPP JEANS</a></li>
                                    <li><a href="#">My Essential Wardrobe</a></li>
                                    <li><a href="#">SOMMERSTEDT</a></li>
                                    <li><a href="#">WIOGA</a></li>
                                    <li><a href="#">Q2</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#">Nyheder</a></li>
                    <li class="menu-item"><a href="#">Udsalg</a></li>
                </ul>
            </div>
            <nav class="nav-icons">
                <!-- <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/header-icons/search.svg" alt="søge ikon" /></a> -->
                <a href="https://moeogaalsing.josefinej.dk/cart/"><img
                            src="<?= get_template_directory_uri(); ?>/images/header-icons/cart.svg"
                            alt="kurv ikon"/></a>
            </nav>
        </div>
    </nav>
</header>

<script>
    const mobileBtn = document.getElementById("hamburger-icon");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileMenuicon = document.querySelector("#hamburger-icon i");

    mobileBtn.addEventListener("click", () => {
        // Open/hide mobile menu
        mobileMenu.classList.toggle("hidden");

        // Change mobile toggler icon on open/close
        if (!mobileMenu.classList.contains("hidden")) {
            mobileMenuicon.classList.remove("fa-bars");
            mobileMenuicon.classList.add("fa-xmark");
        } else {
            mobileMenuicon.classList.remove("fa-xmark");
            mobileMenuicon.classList.add("fa-bars");
        }

        function fjernBanner() {
            var element = document.getElementById("facebookBanner");
            element.remove();
        }
    });

    function fjernBanner() {
        var element = document.getElementById("facebookBanner");
        element.remove();
    }

    window.onscroll = function () {
        myFunction();
    };

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    //https://www.w3schools.com/howto/howto_js_navbar_sticky.asp
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>