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
  <header>This is header</header>