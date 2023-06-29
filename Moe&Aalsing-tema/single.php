<?php
// Loads content on the posts, or in our case, the product pages 

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/
while (have_posts()) {
    the_post(); ?>
    <main class="single-product site-margin site-width top-spacing">
        <?php the_content(); ?> <!-- Displays the content of the post -->
    </main>
<?php }

get_footer(); //Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/
?>
