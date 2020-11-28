<?php
/**
 * The header.
 * 
 * This is the template that displays all of the <head> section and everything 
 * up until the closing of the header.
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'url' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php wp_head(); ?>
</head>
<body>
  <?php wp_body_open(); ?>
