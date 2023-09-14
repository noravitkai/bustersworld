<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Add this line -->
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body>
<nav class="custom-navbar">
    <div class="logo">
        <?php $logo = get_field('logo'); ?>
        <?php if ($logo) : ?>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"></a>
        <?php endif; ?>
    </div>
    <ul class="menu">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_title('Programme')); ?>">Programme</a></li>
    </ul>
</nav>

