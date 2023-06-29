<?php
/* Template Name: Handelsbetingelser side */

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/

while (have_posts()) : the_post(); ?>

    <main class="text-page-site-width text-page-site-margin bottom-spacing-l">
        <h1 class="center-text bottom-spacing-l top-spacing-l"><?= the_title(); ?></h1>

        <div class="bottom-spacing">
            <?= get_field('intro_text'); ?>
        </div>

        <!-- The code in the "accordions" div below is inspired by https://www.w3schools.com/howto/howto_js_accordion.asp and https://www.advancedcustomfields.com/resources/the_sub_field/ -->
        <div class="bottom-spacing">
            <?php if (have_rows('accordion_1')): ?>
                <!-- while loop, that loops through the rows of the 'accordion_1' field group, returns the row data and creates HTML markup for each accordion. Documentation: https://www.advancedcustomfields.com/resources/have_rows/#notes -->
                <?php while (have_rows('accordion_1')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <!-- the_sub_field('close_text') displays the value of the subfield with the slug 'close_text'. Documentation: https://www.advancedcustomfields.com/resources/the_sub_field/ -->
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_2')): ?>
                <?php while (have_rows('accordion_2')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_3')): ?>
                <?php while (have_rows('accordion_3')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_4')): ?>
                <?php while (have_rows('accordion_4')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_5')): ?>
                <?php while (have_rows('accordion_5')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_6')): ?>
                <?php while (have_rows('accordion_6')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_7')): ?>
                <?php while (have_rows('accordion_7')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_8')): ?>
                <?php while (have_rows('accordion_8')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_9')): ?>
                <?php while (have_rows('accordion_9')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_10')): ?>
                <?php while (have_rows('accordion_10')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_11')): ?>
                <?php while (have_rows('accordion_11')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_12')): ?>
                <?php while (have_rows('accordion_12')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('accordion_13')): ?>
                <?php while (have_rows('accordion_13')) : the_row(); ?>
                    <button class="accordion">
                        <p><?= the_sub_field('close_text'); ?></p>
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="">
                            <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                        </div>
                    </button>
                    <div class="panel">
                        <?= the_sub_field('open_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="bottom-spacing-l">
            <?= get_field('bottom_text'); ?>
        </div>
    </main>

<?php endwhile;

get_footer(); ?> <!-- Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/ -->
