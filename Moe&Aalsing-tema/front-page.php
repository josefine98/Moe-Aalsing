<?php
/* Template Name: Forside */

get_header(); //Loads the header.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_header/

?>
<!-- Hero image section -->
<!-- Swiper from the SwiperJS library: https://codesandbox.io/p/sandbox/dvrmix?file=%2Findex.html%3A28%2C1-52%2C6 -->
<div class="swiper hero-swiper">
    <div class="swiper-wrapper">
        <?php if (have_rows('slide_1')): ?> <!-- Checks if the field 'slide_1 has rows -->
            <!-- while loop, that loops through the rows of the 'slide_1' field group, returns the row data and creates HTML markup for each slide. Documentation: https://www.advancedcustomfields.com/resources/have_rows/#notes -->
            <?php while (have_rows('slide_1')) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="image">
                        <!-- the_sub_field('image') displays the value of the subfield with the slug 'image'. Documentation: https://www.advancedcustomfields.com/resources/the_sub_field/ -->
                        <img src="<?= the_sub_field('image'); ?>" alt="">
                    </div>
                    <div class="hero-box">
                        <h1><?= the_sub_field('headline') ?></h1>
                        <p><?= the_sub_field('text') ?></p>
                        <a href="<?= the_sub_field('btn_link') ?>" class="btn"><?= the_sub_field('btn_text') ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('slide_2')): ?>
            <?php while (have_rows('slide_2')) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="<?= the_sub_field('image'); ?>" alt="">
                    </div>
                    <div class="hero-box">
                        <h1><?= the_sub_field('headline') ?></h1>
                        <p><?= the_sub_field('text') ?></p>
                        <a href="<?= the_sub_field('btn_link') ?>" class="btn"><?= the_sub_field('btn_text') ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('slide_3')): ?>
            <?php while (have_rows('slide_3')) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="<?= the_sub_field('image'); ?>" alt="">
                    </div>
                    <div class="hero-box">
                        <h1><?= the_sub_field('headline') ?></h1>
                        <p><?= the_sub_field('text') ?></p>
                        <a href="<?= the_sub_field('btn_link') ?>" class="btn"><?= the_sub_field('btn_text') ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('slide_4')): ?>
            <?php while (have_rows('slide_4')) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="<?= the_sub_field('image'); ?>" alt="">
                    </div>
                    <div class="hero-box">
                        <h1><?= the_sub_field('headline') ?></h1>
                        <p><?= the_sub_field('text') ?></p>
                        <a href="<?= the_sub_field('btn_link') ?>" class="btn"><?= the_sub_field('btn_text') ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('slide_5')): ?>
            <?php while (have_rows('slide_5')) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="image">
                        <img src="<?= the_sub_field('image'); ?>" alt="">
                    </div>
                    <div class="hero-box">
                        <h1><?= the_sub_field('headline') ?></h1>
                        <p><?= the_sub_field('text') ?></p>
                        <a href="<?= the_sub_field('btn_link') ?>" class="btn"><?= the_sub_field('btn_text') ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <div class="swiper-button-next swiper-button-next1"></div>
    <div class="swiper-button-prev swiper-button-prev1"></div>
    <div class="swiper-pagination swiper-pagination1"></div>
</div>

<!-- Featured categories -->
<!-- Swiper from the SwiperJS library: https://codesandbox.io/p/sandbox/v5m4i0?file=%2Findex.html%3A73%2C5-80%2C8 -->
<section class="site-width site-margin top-spacing-l bottom-spacing-l">
    <h2 class="center-text bottom-spacing-s">Udvalgte kategorier</h2>
    <div class="swiper-container">
        <div class="swiper category-swiper">
            <div class="swiper-wrapper">

                <?php if (have_rows('featured_categories')): ?>
                    <?php while (have_rows('featured_categories')) : the_row(); ?>
                        <?php if (have_rows('category_1')): ?>
                            <?php while (have_rows('category_1')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <a href="<?= the_sub_field('category_link') ?>">
                                        <div class="circle-image">
                                            <img src="<?= the_sub_field('category_image') ?>" alt=""/>
                                        </div>
                                        <p class="title"><?= the_sub_field('category_name') ?></p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if (have_rows('category_2')): ?>
                            <?php while (have_rows('category_2')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <a href="<?= the_sub_field('category_link') ?>">
                                        <div class="circle-image">
                                            <img src="<?= the_sub_field('category_image') ?>" alt=""/>
                                        </div>
                                        <p class="title"><?= the_sub_field('category_name') ?></p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('category_3')): ?>
                            <?php while (have_rows('category_3')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <a href="<?= the_sub_field('category_link') ?>">
                                        <div class="circle-image">
                                            <img src="<?= the_sub_field('category_image') ?>" alt=""/>
                                        </div>
                                        <p class="title"><?= the_sub_field('category_name') ?></p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('category_4')): ?>
                            <?php while (have_rows('category_4')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <a href="<?= the_sub_field('category_link') ?>">
                                        <div class="circle-image">
                                            <img src="<?= the_sub_field('category_image') ?>" alt=""/>
                                        </div>
                                        <p class="title"><?= the_sub_field('category_name') ?></p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('category_5')): ?>
                            <?php while (have_rows('category_5')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <a href="<?= the_sub_field('category_link') ?>">
                                        <div class="circle-image">
                                            <img src="<?= the_sub_field('category_image') ?>" alt=""/>
                                        </div>
                                        <p class="title"><?= the_sub_field('category_name') ?></p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-next3"></div>
        <div class="swiper-button-prev swiper-button-prev3"></div>
        <div class="swiper-pagination swiper-pagination3"></div>
    </div>
</section>

<!-- Live info box -->
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
                        <img src="<?= get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="" class="image">
                        <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                    </div>
                    <!--Icon fra Figma plugin Iconduck,  Creative Commons Attribution 4.0 International, https://iconduck.com/icons/11044/facebook-->
                </a>

                <a href="<?= get_field('instagram_link'); ?>">
                    <div class="image">
                        <img src="<?= get_template_directory_uri(); ?>/images/instagram-icon.svg" alt="" class="image">
                        <!-- get_template_directory_uri() retrieves the URI for the active theme. Link to documentation: https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
                    </div>
                    <!--Icon fra Figma plugin Iconduck, Creative Commons Attribution 4.0 International, https://iconduck.com/icons/26788/instagram-with-circle -->
                </a>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata();
endif; ?>


<!-- Instagram section -->
<?php
// Fecthing instagram images using this guide: http://www.mutface.com/solved-how-to-get-instagram-short-lived-access-token-step-by-step-guide-2020/ 
// and this code: https://latitudeinnovation.medium.com/how-to-display-instagram-photos-on-your-wordpress-site-using-latest-instagram-api-d665707ee5a2 

function get_instagram_media(
    $token,
    $user,
    $limit = 10,
    $fields = 'media_url,permalink,media_type,caption',
    $restrict = ['IMAGE']
)
{
    // The request URL. see: https://developers.facebook.com/docs/instagram-basic-display-api/reference/user
    $request_url = 'https://graph.instagram.com/' . $user . '?fields=media&access_token=' . $token;

    // We use transients to cache the results and fetch them once every hour, to avoid bumping into Instagram's limits (see: https://developers.facebook.com/docs/graph-api/overview/rate-limiting#instagram-graph-api)
    $output = get_transient('instagram_feed_' . $user); // Our transient should have a unique name, so we pass the user id as an extra precaution.
    if (false === ($data = $output) || empty($output)) {
        // Prepare the data variable and set it as an empty array.
        $data = [];
        // Make the request
        $response = wp_safe_remote_get($request_url);
        $response_body = '';
        if (is_array($response) && !is_wp_error($response)) {
            $response_body = json_decode($response['body']);
        }
        if ($response_body && isset($response_body->media->data)) {
            $i = 0;
            // Get each media item from it's ID and push it to the $data array.
            foreach ($response_body->media->data as $media) {
                if ($limit > $i) {
                    $request_media_url = 'https://graph.instagram.com/' . $media->id . '?fields=' . $fields . '&access_token=' . $token;
                    $media_response = wp_safe_remote_get($request_media_url);
                    if (is_array($media_response) && !is_wp_error($media_response)) {
                        $media_body = json_decode($media_response['body']);
                    }
                    if (in_array($media_body->media_type, $restrict, true)) {
                        $i++;
                        $data[] = $media_body;
                    }
                }
            }
        }
        // Store the data in the transient and keep if for an hour.
        set_transient('instagram_feed_' . $user, $data, HOUR_IN_SECONDS);

        // Refresh the token to make sure it never expires (see: https://developers.facebook.com/docs/instagram-basic-display-api/guides/long-lived-access-tokens#refresh-a-long-lived-token)
        wp_safe_remote_get('https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=' . $token);
        $output = $data;
    }
    return $output;
} ?>

<!-- Swiper from the SwiperJS library: https://codesandbox.io/p/sandbox/v5m4i0?file=%2Findex.html%3A73%2C5-80%2C8 -->
<section class="insta-section site-width site-margin top-spacing-l bottom-spacing-l">
    <h2><a href="#"></a>@moeaalsing</h2>
    <p class="bottom-spacing">Følg os på Instagram</p>
    <div class="swiper-container">
        <div class="swiper insta-swiper">
            <div class="swiper-wrapper">
                <?php
                get_instagram_media('TOKEN', 'USER ID');
                // Code to fetch instagram images code: https://latitudeinnovation.medium.com/how-to-display-instagram-photos-on-your-wordpress-site-using-latest-instagram-api-d665707ee5a2
                $photos =
                    get_instagram_media('TOKEN', 'USER ID');
                if ($photos) : ?>
                    <?php foreach ($photos as $photo) : ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url($photo->permalink); ?>" target="_blank" class="image insta-img">
                                <img src="<?php echo $photo->media_url; ?>"
                                     alt="<?php echo htmlspecialchars(mb_substr($photo->caption, 0, 60)); ?> ...">
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif;
                ?>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-next2"></div>
        <div class="swiper-button-prev swiper-button-prev2"></div>
        <div class="swiper-pagination swiper-pagination2"></div>
    </div>
</section>


<?php get_footer(); ?> <!-- Loads the footer.php template file. Documentation: https://developer.wordpress.org/reference/functions/get_footer/ -->

<script>
    // Hero section
    // Swiper script from the SwiperJS library: https://codesandbox.io/p/sandbox/dvrmix?file=%2Findex.html%3A28%2C1-52%2C6
    var swiper = new Swiper(".hero-swiper", {
        autoplay: {
            delay: 5000, // Sets the delay between change of slides to 5 seconds for autoplay
        },
        slidesPerView: 1, // Sets the amount of slides the user can see on the screen to 1
        loop: true, // When loop is set to true, the swiper slides start over after reaching the end
        pagination: { // Tells the swiper which element is this swipers pagination, and makes it clickable
            el: ".swiper-pagination1",
            clickable: true,
        },
        navigation: { // Tells the swiper which elements are used as next and prev buttons
            nextEl: ".swiper-button-next1",
            prevEl: ".swiper-button-prev1",
        },
    });

    // Featured category section
    // Swiper script from the SwiperJS library: https://codesandbox.io/p/sandbox/v5m4i0?file=%2Findex.html%3A73%2C5-80%2C8
    var swiper = new Swiper(".category-swiper", {
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination3",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next3",
            prevEl: ".swiper-button-prev3",
        },
        breakpoints: { // When the screen size is 481px or more, slides per view changes to 4
            481: {
                slidesPerView: 2,
            },
            600: {
                slidesPerView: 3,
            },
            769: {
                slidesPerView: 4,
            },
            950: {
                slidesPerView: 5,
            },
        }
    });

    // Instagram section
    // Swiper script from the SwiperJS library: https://codesandbox.io/p/sandbox/v5m4i0?file=%2Findex.html%3A73%2C5-80%2C8
    var swiper = new Swiper(".insta-swiper", {
        slidesPerView: 3,
        spaceBetween: 1,
        pagination: {
            el: ".swiper-pagination2",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next2",
            prevEl: ".swiper-button-prev2",
        },
        breakpoints: { // When the screen size is 481px or more, slides per view changes to 4
            481: {
                slidesPerView: 4,
            },
        }
    });
</script>