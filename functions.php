<?php
// Function to enqueue Bootstrap CSS and JS
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

function mohammed_theme_scripts() {
    // Load JS file
    wp_enqueue_script('mohammed-js', get_template_directory_uri() . '/asstets/js/main.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'mohammed_theme_scripts');


function theme_enqueue_styles() {
    // Load main stylesheet
    wp_enqueue_style('mohammed-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/asstets/style/customStyle.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');