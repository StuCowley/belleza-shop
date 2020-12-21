<?php
/**
 * Displays the footer navigation
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

$footerMenuDefaults = array(
  'theme_location'  =>  'footer',
  'container_class' =>  'sc-footer-nav'
);
wp_nav_menu( $footerMenuDefaults );
