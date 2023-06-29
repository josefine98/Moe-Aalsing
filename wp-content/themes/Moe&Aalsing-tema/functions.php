<?php
// The moe_aalsing_files() function imports all the css files, scripts, fonts etc. used in the theme 
// wp_enqueue_style registers and enqueues stylesheets. Documentation: https://developer.wordpress.org/reference/functions/wp_enqueue_style/ 
// wp_enqueue_script registers and enqueues scripts. Documentation: https://developer.wordpress.org/reference/functions/wp_enqueue_script/ 
function moe_aalsing_files() {
    //Normalize CSS from: https://unpkg.com/browse/normalize.css@8.0.1/ 
    wp_enqueue_style('normalize-css', '//unpkg.com/normalize.css');

    //Main stylesheet
    wp_enqueue_style('main-stylesheet', get_theme_file_uri('/build/index.css'), array(), '1.4', 'all');

    //Google fonts: Libre Bodoni & League Spartan
    //League Spartan: https://fonts.google.com/specimen/League+Spartan?query=League+Spartan 
    //Libre Bodoni: https://fonts.google.com/specimen/Libre+Bodoni
    wp_enqueue_style('google-fonts', '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Libre+Bodoni:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">', false);


    // main script
    wp_enqueue_script('main-moeaalsing-js', get_theme_file_uri('/build/script.js'), NULL, '1.0', true);

    // SwiperJS library CDN: https://swiperjs.com/get-started 
    wp_enqueue_script('swiper-js-script', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', NULL, '', true);
    wp_enqueue_style('swiper-js-stylesheet', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
}

// Adds a callback function (moe_aalsing_files()) to the action hook wp_enqueue_scripts. Documentation: https://developer.wordpress.org/reference/functions/add_action/ 
add_action('wp_enqueue_scripts', 'moe_aalsing_files');


// The moe_aalsing_features() function is used to add different features 
function moe_aalsing_features() {
    // Adds page-title to the title head tag. Documentation: https://developer.wordpress.org/reference/functions/add_theme_support/ 
    add_theme_support('title-tag');

    // Registers menus, that can be edited in the WordPress backend. Documentation: https://developer.wordpress.org/reference/functions/register_nav_menu/
    register_nav_menu('footerNav', 'Footer Menu');
}

// Calls the moe_aalsing_features() function after the theme is loaded. Documentation: https://developer.wordpress.org/reference/hooks/after_setup_theme/ 
add_action('after_setup_theme', 'moe_aalsing_features');


// Woocommerce

// Code to fix blurry images from: https://github.com/webstylepress/WordPress-Snippets/tree/fix-blurry-images-woocommerce
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'custom_loop_product_thumbnail', 10);
function custom_loop_product_thumbnail() {
    global $product;
    $size = 'woocommerce_thumbnail';
    $image_size = apply_filters('single_product_archive_thumbnail_size', $size);
    echo $product ? $product->get_image('full') : '';
}


// addProductTitleAndDetails() creates the markup for the title, brand and product description
function addProductTitleAndDetails() { ?>
    <h1><?= the_title(); ?></h1>
    <p class="product-brand"><?= get_field('brand'); ?></p> <!-- gets the value from the ACF 'brand' -->
    <div class="top-spacing-s"> <!-- displays the product description -->
        <?= the_excerpt(); ?>
    </div>
<?php }

// Adds the markup of the addProductTitleAndDetails() function to the single product summary on the page. Hook guide: https://www.businessbloomer.com/woocommerce-visual-hook-guide-single-product-page/
add_action('woocommerce_single_product_summary', 'addProductTitleAndDetails', 5);


// wpdocs_custom_excerpt_length( $length ) Changes the excerpt length from 55 words (standard) to 2000, as it is used to display the product description
// Code/documentation: https://developer.wordpress.org/reference/functions/the_excerpt/ 
function wpdocs_custom_excerpt_length($length) {
    return 2000; // Set to 2000, to avoid the product description ever being cut off
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


// AddSizeGuide() Adds a link to a size guide to the single product page before the add to cart button 
function AddSizeGuide() { ?>
    <!-- Size guide from Moe&Aalsings current website: https://moeogaalsing.dk/wp-content/uploads/2023/05/337760105_9039084439499398_5554744417756857947_n-1.png -->
    <a class="size-guide bottom-spacing-s"
       href="http://moeogaalsing.josefinej.dk/wp-content/uploads/2023/06/337760105_9039084439499398_5554744417756857947_n-1.png"
       target=”_blank”>Link til størrelsesguide</a>
<?php }

add_action('woocommerce_before_add_to_cart_button', 'AddSizeGuide', 5);


// addShippingText() creates HTML markup for the shipping details below the "add to basket" button
function addShippingText() { ?>
    <div>
        <p>Levering: 1-3 hverdage</p>
        <p>Fri fragt over 600 kr </p>
    </div>
<?php }

// Adds the content of the addShippingText() function after the "add to cart" button. Hook guide: https://www.businessbloomer.com/woocommerce-visual-hook-guide-single-product-page/
add_action('woocommerce_after_add_to_cart_form', 'addShippingText', 5);


// addProductAccordions() creates the markup for the product detail accordions on the single product page. 
function addProductAccordions() { ?>
    <div>
        <button class="accordion top-spacing-s">
            <p>Størrelse og pasform</p>
            <div class="image">
                <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
            </div>
        </button>
        <div class="panel"><?= get_field('size_details'); ?></div>
        <!-- Gets the content from the size_details custom field -->

        <button class="accordion">
            <p>Materiale og vaskeanvisning</p>
            <div class="image">
                <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
            </div>
        </button>
        <div class="panel"><?= get_field('material'); ?></div>

        <button class="accordion">
            <p>Levering og returnering</p>
            <div class="image">
                <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
            </div>
        </button>
        <div class="panel"><?= get_field('shipping'); ?></div>
    </div>
<?php }

// Adds the content of the addProductAccordions() function after the "add to cart" button. Hook guide: https://www.businessbloomer.com/woocommerce-visual-hook-guide-single-product-page/
add_action('woocommerce_after_add_to_cart_form', 'addProductAccordions', 5);


// addTextBeforeAddToCartQuantity() adds text before the quantity input field
function addTextBeforeAddToCartQuantity() { ?>
    <p class="quantity-text top-spacing-s">Vælg antal:</p>
<?php }

// Adds the markup of the addTextBeforeAddToCartQuantity() function to the page before the add to cart quantity input field. Hook guide: https://www.businessbloomer.com/woocommerce-visual-hook-guide-single-product-page/
add_action('woocommerce_before_add_to_cart_quantity', 'addTextBeforeAddToCartQuantity', 5);


// Removing and adding "sort by" drowdown, to be able to control it 
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
add_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 5);


// addFilters() adds product filters with the Themify - WooCommerce Product Filter plugin: https://wordpress.org/plugins/themify-wc-product-filter/
function addFilters() {
    echo do_shortcode("[searchandfilter id=wpf_647b85ef3a7f4]"); // Shortcode from the plugin
}

// Adds the markup of the addFilters() function to the page before the shop loop. Hook guide: https://www.businessbloomer.com/woocommerce-visual-hook-guide-archiveshopcat-page/
add_action('woocommerce_before_shop_loop', 'addFilters', 5);


//Changes button text on shop archive pages. Code from: https://woocommerce.com/document/change-add-to-cart-button-text/
function woocommerce_add_to_cart_button_text_archives() {
    return __('Se produkt', 'woocommerce');
}

add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives');
?>