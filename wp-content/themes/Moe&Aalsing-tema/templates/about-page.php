<?php
/* Template Name: Tekst og billede side */
// Used for the about page and the pages about homeparty and live sale

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/

while (have_posts()) : the_post(); ?>
    <main class="site-width site-margin bottom-spacing-l">
        <h1 class="center-text bottom-spacing-l top-spacing-l"><?= the_title(); ?></h1> <!-- Displays page title -->

        <section class="about-section">
            <div class="text-column">
                <div class="bottom-spacing-s">
                    <?= get_field('text'); ?> <!-- Displays content from the ACF with the slug 'text' -->
                </div>
                <?php if (get_field('if_some_links')): ?> <!-- Checks if the user has chosen "Yes" to display SoMe links -->
                    <div class="flex">
                        <a href="<?= get_field('facebook_link'); ?>">
                            <div class="image">
                                <img src="<?= get_template_directory_uri(); ?>/images/facebook-icon.svg" alt=""
                                     class="image">
                                <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                            </div>
                        </a>

                        <a href="<?= get_field('instagram_link'); ?>">
                            <div class="image">
                                <img src="<?= get_template_directory_uri(); ?>/images/instagram-icon.svg" alt=""
                                     class="image">
                                <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                            </div>
                        </a>
                    </div>
                <?php endif ?>
            </div>
            <div class="image bottom-spacing-s">
                <img src="<?= get_field('image'); ?>" alt="">
                <!-- Gets the image URL from the ACF with the slug 'image' -->
            </div>
        </section>
    </main>
<?php endwhile;

get_footer(); // Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/ 

?>

