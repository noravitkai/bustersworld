<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Hero Section -->
    <?php $hero_image = get_field('hero_image'); ?>

    <section class="hero-section" style="background-image: url('<?php echo esc_url($hero_image['url']); ?>'); background-size: cover; background-position: center; height: 100vh;">
        <div class="hero-content">
                <h1 class="hero-heading"><?php the_field('hero_heading'); ?></h1>
                <p class="hero-subheading"><?php the_field('hero_subheading'); ?></p>
                <p class="hero-date"><?php the_field('date'); ?></p>
                <a href="<?php the_field('cta_button_link'); ?>" class="hero-button"><?php the_field('cta_button_text'); ?></a>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>