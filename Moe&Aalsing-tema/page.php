<?php
//The fallback template for pages, in case nothing more specific fits 

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/
while (have_posts()) {
    the_post(); ?>

    <h1><?= the_title(); ?></h1> <!-- Displays the title of the post -->
    <?php the_content(); ?> <!-- Displays the content of the post -->

<?php }

get_footer(); //Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/
?>
