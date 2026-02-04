<?php

/**
 * Header Template
 * 
 * @package smashit
 */
?>
<!DOCTYPE html>
<html <?= language_attributes() ?>>

<head>
  <meta charset="<?= bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <?php wp_body_open() ?>
  <header class="bg-white dark:bg-gray-900">
    <?php get_template_part('template-parts/header/nav') ?>
  </header>