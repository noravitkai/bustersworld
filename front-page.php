<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Hero Section -->
    <?php $hero_image = get_field('hero_image'); ?>

    <section class="relative text-black" style="background-image: url('<?php echo esc_url($hero_image['url']); ?>'); background-size: cover; background-position: center; height: 100vh;">
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold"><?php the_field('hero_heading'); ?></h1>
                <p class="text-xl"><?php the_field('hero_subheading'); ?></p>
                <p class="text-lg"><?php the_field('date'); ?></p>
                <a href="<?php the_field('cta_button_link'); ?>" class="mt-4 inline-block px-6 py-3 text-lg font-semibold bg-red-500 hover:bg-red-600 text-white rounded-full transition duration-300 no-underline"><?php the_field('cta_button_text'); ?></a>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>