<?php
/*
Template Name: Programme
*/
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="welcome-content">
            <h2 class="welcome-heading"><?php the_field('welcome_heading'); ?></h2>
            <div class="welcome-columns">
                <div class="welcome-text">
                    <h2 class="directors-subheading"><?php the_field('directors_subheading'); ?></h2>
                    <?php $directors_message = get_field('directors_message'); ?>
                    <?php if ($directors_message) : ?>
                        <p class="directors-message"><?php echo esc_html($directors_message); ?></p>
                    <?php endif; ?>
                    <p class="directors-signature"><?php the_field('directors_signature'); ?></p>
                </div>
                <div class="directors-photo">
                    <?php $directors_photo = get_field('directors_photo'); ?>
                    <?php if ($directors_photo) : ?>
                        <img src="<?php echo esc_url($directors_photo['url']); ?>" alt="<?php echo esc_attr($directors_photo['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Actors Section -->
    <section class="actor-section">
        <div class="actor-content">
            <h2 class="actor-heading"><?php the_field('actor_heading'); ?></h2>

            <div class="actor-columns">
                <?php
                $actors_args = array(
                    'post_type' => 'actor',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );

                $actors_query = new WP_Query($actors_args);

                if ($actors_query->have_posts()) :
                    $count = 0;
                    while ($actors_query->have_posts()) :
                        $actors_query->the_post();
                        if ($count % 3 === 0) :
                ?>

                            <div class="actor-set">
                                <?php endif; ?>

                                <div class="actor-item">
                                    <div class="actor-image">
                                        <?php $actor_image = get_field('actor_image'); ?>
                                        <?php if ($actor_image) : ?>
                                            <img src="<?php echo esc_url($actor_image['url']); ?>" alt="<?php echo esc_attr($actor_image['alt']); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="actor-details">
                                        <h3 class="actor-name"><?php the_field('actor_name'); ?></h3>
                                        <p class="actor-character">Character: <?php the_field('character_name'); ?></p>
                                    </div>
                                </div>

                                <?php $count++;
                                if ($count % 3 === 0) : ?>
                            </div>

                    <?php endif;
                    endwhile;

                    if ($count % 3 !== 0) :
                    ?>
                        </div>
                    <?php endif;

                    wp_reset_postdata();
                else :
                    echo 'No actors found.';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section class="sponsors-section">
        <div class="sponsors-content">
            <h2 class="sponsors-heading"><?php the_field('sponsors_heading'); ?></h2>
            <div class="sponsors-list">
                <?php
                $sponsors_args = array(
                    'post_type' => 'sponsor',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );

                $sponsors_query = new WP_Query($sponsors_args);

                if ($sponsors_query->have_posts()) :
                    $count = 0;
                    while ($sponsors_query->have_posts()) :
                        $sponsors_query->the_post();
                        if ($count % 5 === 0) :
                ?>
                            <div class="sponsor-row">
                <?php endif; ?>

                        <div class="sponsor-item">
                            <?php $sponsor_logo = get_field('sponsor_logo'); ?>
                            <?php if ($sponsor_logo) : ?>
                                <img src="<?php echo esc_url($sponsor_logo['url']); ?>" alt="<?php echo esc_attr($sponsor_logo['alt']); ?>">
                            <?php endif; ?>
                        </div>

                        <?php $count++;
                        if ($count % 5 === 0) : ?>
                            </div>
                <?php endif;
                    endwhile;

                    if ($count % 5 !== 0) : ?>
                        </div>
                <?php endif;

                    wp_reset_postdata();
                else :
                    echo 'No sponsors found.';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Reviews and Ratings Section -->
    <section class="reviews-section">
        <div class="reviews-content">
            <h2 class="reviews-heading"><?php the_field('reviews_heading'); ?></h2>
            <div class="reviews-columns">
                <div class="reviews-form">
                    <?php echo do_shortcode('[site_reviews_form]');?>
                </div>
                <div class="reviews-submitted">
                    <?php echo do_shortcode('[site_reviews HIDEREVIEWS="0" NUM="4"]');?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>