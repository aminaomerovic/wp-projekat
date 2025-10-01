<?php
// Učitavanje glavnog CSS-a
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('planit-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
});

// Podešavanja teme
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');          // <title> automatski
  add_theme_support('post-thumbnails');    // featured images
  register_nav_menus([
    'primary' => 'Primary Menu',
  ]);
});
