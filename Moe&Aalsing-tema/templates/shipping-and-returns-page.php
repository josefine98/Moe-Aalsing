<?php
/* Template Name: Fragt og retur side */

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/

while (have_posts()) : the_post(); ?>

    <main class="text-page-site-width text-page-site-margin">
        <h1 class="center-text bottom-spacing-l top-spacing-l"><?= the_title(); ?></h1>

        <div class="bottom-spacing">
            <?= get_field('text'); ?>
        </div>

        <!-- Displays the contact form from the 'contact_form' ACF, which allows the user to choose a Contact Form 7 form to insert on the page -->
        <div class="contact-form bottom-spacing-l">
            <!-- The following 7 lines of code is from  https://stackoverflow.com/questions/14386341/using-advanced-custom-fields-and-contact-form-7-to-display-a-form -->
            <?php $posts = get_field('contact_form');
            if ($posts):
                foreach ($posts as $p): // variable must NOT be called $post (IMPORTANT)
                    $cf7_id = $p->ID;
                    echo do_shortcode('[contact-form-7 id="' . $cf7_id . '" ]');
                endforeach;
            endif; ?>
        </div>
    </main>

<?php endwhile;

get_footer(); ?> <!-- Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/ -->
