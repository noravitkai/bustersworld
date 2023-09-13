<?php
function mt_register_stylesheet() {
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mt_register_stylesheet');

function ad_remove_gutenberg() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}
add_action('init', 'ad_remove_gutenberg');
?>
