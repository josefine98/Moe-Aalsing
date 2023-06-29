<?php
/* Template Name: Kontakt side */

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/

while (have_posts()) : the_post(); ?>

    <main class="site-width site-margin bottom-spacing-l">
        <div class="bottom-spacing-l top-spacing-l">
            <h1 class="center-text"><?= the_title(); ?><h1> <!-- Displays page title -->
        </div>

        <div class="contact-info bottom-spacing-s">
            <div class="contact-single">
                <div class="contact-circle">
                    <div class="image">
                        <img src="<?= get_template_directory_uri(); ?>/images/messenger-icon.svg" alt="">
                        <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                    </div>
                    <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/icons/21117/facebook-messenger-->
                </div>
                <p><b>Messenger</b></p>
                <p>Skriv til os <a href="<?= get_field('messenger_link') ?>">her</a></p>
            </div>

            <div class="contact-single">
                <div class="contact-circle">
                    <div class="image">
                        <img src="<?= get_template_directory_uri(); ?>/images/email-icon.svg" alt="">
                        <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                    </div>
                    <!--Icon fra Figma plugin Iconduck,Creative Commons Attribution 4.0 International, https://iconduck.com/icons/21888/envelope-->
                </div>
                <p><b>E-mail</b></p>
                <p><a href="mailto:<?= get_field('email_address') ?>"><?= get_field('email_address') ?></a></p>
            </div>

            <div class="contact-single">
                <div class="contact-circle">
                    <div class="image">
                        <img src="<?= get_template_directory_uri(); ?>/images/phone-icon.svg" alt="">
                        <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                    </div><!--Icon fra Figma plugin Iconduck, MIT License, https://iconduck.com/icons/2221/phone-->
                </div>
                <p><b>Telefon</b></p>
                <!-- str_replace() is used to replace all spaces with an empty string in the phone number in the href value: https://www.w3schools.com/php/func_string_str_replace.asp -->
                <p>
                    <a href="tel:<?= str_replace(' ', '', (get_field('phone_number'))) ?>"><?= get_field('phone_number') ?></a>
                </p>
            </div>

            <div class="contact-single">
                <div class="contact-circle">
                    <div class="image">
                        <img src="<?= get_template_directory_uri(); ?>/images/map-icon.svg" alt="">
                        <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                    </div>
                    <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/icons/22148/alternate-map-marker-->
                </div>
                <p><b>Adresse</b></p>
                <?= get_field('company_address') ?>
            </div>
        </div>


        <!-- Displays the contact form from the 'contact_form' ACF, which allows the user to choose a Contact Form 7 form to insert on the page -->
        <div class="contact-form bottom-spacing top-spacing-l">
            <h2><?= get_field('contact_form_headline'); ?></h2>
            <p><?= get_field('contact_form_text'); ?></p>

            <!-- The following 7 lines of code is from  https://stackoverflow.com/questions/14386341/using-advanced-custom-fields-and-contact-form-7-to-display-a-form -->
            <?php $posts = get_field('contact_form');
            if ($posts):
                foreach ($posts as $p): // variable must NOT be called $post (IMPORTANT)
                    $cf7_id = $p->ID;
                    echo do_shortcode('[contact-form-7 id="' . $cf7_id . '" ]');
                endforeach;
            endif; ?>
        </div>

        <?php

        // The following section is a post object ACF field with the info box about live sales on Instagram and Facebook
        // Lines 77 - 109 are inspired by: https://pointandstare.com/using-post-objects-advanced-custom-fields
        $post_object = get_field('info_box');
        if ($post_object):
            $post = $post_object;
            setup_postdata($post); ?>
            <section class="live-section top-spacing-l">
                <div class="live-section-text bottom-spacing-s">
                    <h2><?= get_field('headline'); ?></h2>
                    <p><?= get_field('text'); ?></p>
                </div>

                <div class="image">
                    <img src="<?= get_field('image'); ?>" alt="mis">
                </div>

                <div class="follow-socials">
                    <?= get_field('follow_text'); ?>
                    <div class="flex">
                        <a href="<?= get_field('facebook_link'); ?>">
                            <div class="image">
                                <img src="<?= get_template_directory_uri(); ?>/images/facebook-icon.svg" alt=""
                                     class="image">
                                <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                            </div>
                            <!--Icon fra Figma plugin Iconduck,  Creative Commons Attribution 4.0 International, https://iconduck.com/icons/11044/facebook-->
                        </a>

                        <a href="<?= get_field('instagram_link'); ?>">
                            <div class="image">
                                <img src="<?= get_template_directory_uri(); ?>/images/instagram-icon.svg" alt=""
                                     class="image">
                                <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                            </div>
                            <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/icons/26788/instagram-with-circle -->
                        </a>
                    </div>
                </div>
            </section>
            <?php wp_reset_postdata();
        endif; ?>
    </main>
<?php

endwhile;

get_footer(); //Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/ 
?>

