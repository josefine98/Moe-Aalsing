<?php
//This file is the fallback template, and will be displayed if nothing else fits, although it shouldn't happen

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/
?>

<?php

while (have_posts()) {
    the_post(); ?>

    <h1><?= the_title(); ?></h1> <!-- Displays the title of the post -->
    <?php the_content(); ?> <!-- Displays the content of the post -->

    <?php
}
?>

<?php get_footer(); ?> <!-- Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/ -->
