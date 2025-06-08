<?php
function m8prog_enqueue_styles() {
    // Load parent theme stylesheet first
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load child theme stylesheet
    wp_enqueue_style('m8prog-style',
        get_stylesheet_uri(),
        array('parent-style')  // Make sure it loads after parent
    );
}
add_action('wp_enqueue_scripts', 'm8prog_enqueue_styles');
