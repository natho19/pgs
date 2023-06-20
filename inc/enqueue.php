<?php

function pgs_load_scripts() {
    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], null);
    wp_enqueue_style('lineicons', get_template_directory_uri() . '/assets/css/lineicons.css', [], null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', [], null);

    // JS
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'pgs_load_scripts');