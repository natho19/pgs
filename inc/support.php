<?php

define('PGS_IMG_URL', get_template_directory_uri() . '/assets/images/', false);

// Disable Admin Bar
add_filter('show_admin_bar', '__return_false');

// Add title tag
function pgs_support() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'pgs_support');