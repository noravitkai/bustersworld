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
                <h2 class="hero-subheading"><?php the_field('hero_subheading'); ?></h2>
                <p class="hero-date"><?php the_field('date'); ?></p>
                <a href="<?php the_field('cta_button_link'); ?>" class="hero-button"><?php the_field('cta_button_text'); ?></a>
        </div>
    </section>

    <!-- Ticket Section -->
    <section class="ticket-section">
        <div class="ticket-content">
            <h2 class="ticket-heading"><?php the_field('ticket_heading'); ?></h2>

            <div class="child-ticket">  
                <?php $child_ticket_image = get_field('child_ticket_image'); ?>
                    <?php if ($child_ticket_image) : ?>
                        <img src="<?php echo esc_url($child_ticket_image['url']); ?>" alt="<?php echo esc_attr($child_ticket_image['alt']); ?>">
                    <?php endif; ?>
                <p><?php the_field('child_ticket_description') ?></p>
            </div>

            <div class="adult-ticket">
                <p><?php the_field('adult_ticket_description') ?></p>
                <?php $adult_ticket_image = get_field('adult_ticket_image'); ?>
                    <?php if ($adult_ticket_image) : ?>
                        <img src="<?php echo esc_url($adult_ticket_image['url']); ?>" alt="<?php echo esc_attr($adult_ticket_image['alt']); ?>">
                    <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Competition Section -->
    <section class="competition-section">
        <div class="competition-content">
            <h2 class="competition-heading"><?php the_field('competition_heading'); ?></h2>

            <div class="competition-blocks">
                <div class="competition-details">
                    <h3><?php the_field('competition_subheading') ?></h3>
                    <p><?php the_field('competition_description'); ?></p>
                    <?php $competition_illustration = get_field('competition_illustration'); ?>
                        <?php if ($competition_illustration) : ?>
                            <img src="<?php echo esc_url($competition_illustration['url']); ?>" alt="<?php echo esc_attr($competition_illustration['alt']); ?>">
                        <?php endif; ?>
                </div>

                <div class="competition-form">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Competition Form"]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>