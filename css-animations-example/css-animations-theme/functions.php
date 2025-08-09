<?php
/*
Theme Name: CSS Animations Demo
Description: A child theme of Twenty Twenty-Five with CSS animations for WordPress Playground demonstrations
Version: 1.0
Template: twentytwentyfive
*/

// Enqueue parent theme styles
function css_animations_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'css_animations_enqueue_styles');
?>
