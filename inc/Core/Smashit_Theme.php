<?php


/**
 * Bootstrap Theme
 * 
 * @package smashit
 */

namespace Smashit\Core;

class Smashit_Theme {
  use Singleton;

  protected function __construct() {
    // Load  assets.
    Assets::get_instance();

    $this->setup_hooks();
  }

  protected function setup_hooks() {
    // wp_die('hooks setup correctly');
  }
}
