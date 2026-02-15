<?php

/**
 * Trait Singleton
 * 
 * @package smashit
 */

namespace Smashit\Core;

trait Singleton {
  private function __construct() {
  }

  private function __clone() {
  }

  final public static function get_instance() {
    static $instance = [];

    $called_class = \get_called_class();

    if (! isset($instance[$called_class])) {
      $instance[$called_class] = new $called_class();

      do_action(sprintf('smashit_singleton_init_%s', $called_class));
    }

    return $instance[$called_class];
  }
}
