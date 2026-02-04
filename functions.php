<?php

/**
 * Theme Functions
 * 
 * @package smashit
 */

function smashit_enqueue_scripts() {
  // Register styles
  wp_register_style('smashit-stylesheet', get_template_directory_uri() . '/assets/dist/css/main.css');

  // Register scripts
  wp_register_script('smashit-script', get_template_directory_uri() . '/assets/dist/js/main.js', [], false, true);

  // Enqueue styles
  wp_enqueue_style('smashit-stylesheet');

  // Enqueue scripts
  wp_enqueue_script('smashit-script');
}

add_action('wp_enqueue_scripts', 'smashit_enqueue_scripts');
