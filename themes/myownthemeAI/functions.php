<?php
function ck_enqueue_assets() {
  // 1) Parent/child style if you have a parent theme
  // wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');

  // 2) Your theme’s style.css
  wp_enqueue_style(
    'ck-main-style',
    get_stylesheet_uri(),             // this points at style.css in your theme root
    [],                               // no dependencies
    filemtime( get_stylesheet_directory() . '/style.css' ) // version = file modified time
  );
}
add_action('wp_enqueue_scripts','ck_enqueue_assets');
