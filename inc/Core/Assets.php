<?php

/**
 * Assets Loader
 * 
 * @package smashit
 */

namespace Smashit\Core;

class Assets {
  use Singleton;

  protected function __construct() {
    // Setup hooks
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_Action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }

  public function register_styles() {
    wp_register_style('smashit-stylesheet', SMASHIT_URL . '/assets/dist/css/main.css');
    wp_enqueue_style('smashit-stylesheet');
  }

  public function register_scripts() {
    wp_register_script('smashit-script', SMASHIT_URL . '/assets/dist/js/main.js', [], false, true);
    wp_enqueue_script('smashit-script');

    wp_register_script('tailwindplus-elements', 'https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1', [], null, false);
    wp_enqueue_script('tailwindplus-elements');
  }
}
