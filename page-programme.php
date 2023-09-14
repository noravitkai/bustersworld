<?php
/*
Template Name: Programme
*/
?>

<?php get_header(); ?>

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

<?php get_footer(); ?>
