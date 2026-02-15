<?php

/**
 * Theme Functions
 * 
 * @package smashit
 */

use Smashit\Core\Smashit_Theme;

if (!defined(('SMASHIT_PATH'))) {
  define('SMASHIT_PATH', untrailingslashit(get_template_directory()));
}

if (!defined(('SMASHIT_URL'))) {
  define('SMASHIT_URL', untrailingslashit(get_template_directory_uri()));
}

require_once SMASHIT_PATH . '/vendor/autoload.php';
require_once SMASHIT_PATH . '/inc/Core/Singleton.php';
require_once SMASHIT_PATH . '/inc/Core/Smashit_Theme.php';
Smashit_Theme::get_instance();
