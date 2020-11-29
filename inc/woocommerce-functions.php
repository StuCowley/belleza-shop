<?php
/**
 * WooCommerce functions and definitions
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

/**
 * Removes default WooCommerce styling
 * 
 * @since 1.0.0
 * @return void
 */
if ( class_exists( 'Woocommerce' ) ) {
  add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}
