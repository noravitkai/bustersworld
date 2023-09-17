<?php
/*
Template Name: Home
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

    <!-- Story Section -->
    <section class="story-section">
        <div class="story-content">
            <h2 class="story-heading"><?php the_field('story_heading'); ?></h2>

            <div class="story-stages">
                <div class="story-book">
                    <?php $book_icon = get_field('book_icon'); ?>
                    <?php if ($book_icon) : ?>
                        <img src="<?php echo esc_url($book_icon['url']); ?>" alt="<?php echo esc_attr($book_icon['alt']); ?>">
                    <?php endif; ?>
                    <p><?php the_field('book_description'); ?></p>
                    <a target="_blank" class="year-button" href="<?php the_field('book_link'); ?>"><?php the_field('book_year'); ?></a>
                </div>

                <div class="story-movie">
                    <?php $movie_icon = get_field('movie_icon'); ?>
                    <?php if ($movie_icon) : ?>
                        <img src="<?php echo esc_url($movie_icon['url']); ?>" alt="<?php echo esc_attr($movie_icon['alt']); ?>">
                    <?php endif; ?>
                    <p><?php the_field('movie_description'); ?></p>
                    <a target="_blank" class="year-button" href="<?php the_field('movie_link'); ?>"><?php the_field('movie_year'); ?></a>
                </div>

                <div class="story-play">
                    <?php $play_icon = get_field('play_icon'); ?>
                    <?php if ($play_icon) : ?>
                        <img src="<?php echo esc_url($play_icon['url']); ?>" alt="<?php echo esc_attr($play_icon['alt']); ?>">
                    <?php endif; ?>
                    <p><?php the_field('play_description'); ?></p>
                    <a target="_blank" class="year-button" href="<?php the_field('play_link'); ?>"><?php the_field('play_year'); ?></a>
                </div>
            </div>
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
                <div class="ticket-details">
                    <h3 class="child-ticket-subheading"><?php the_field('child_ticket_subheading') ?></h3>
                    <p><?php the_field('child_ticket_description') ?></p>
                    <a href="<?php the_field('ticket_button_link'); ?>" class="ticket-button"><?php the_field('ticket_button_text'); ?></a>
                </div>
            </div>

            <div class="adult-ticket">
                <div class="ticket-details">
                    <h3 class="adult-ticket-subheading"><?php the_field('adult_ticket_subheading') ?></h3>
                    <p><?php the_field('adult_ticket_description') ?></p>
                    <a href="<?php the_field('ticket_button_link'); ?>" class="ticket-button"><?php the_field('ticket_button_text'); ?></a>
                </div>
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