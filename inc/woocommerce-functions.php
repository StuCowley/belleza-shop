<?php
/**
 * WooCommerce functions and definitions
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

/**
 * Registers support for WooCommerce features
 * 
 * @since 1.0.0
 * @return void
 */
function bellezashop_woocommerce_setup() {
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}
add_filter( 'after_setup_theme', 'belleza_woocommerce_setup' );

/**
 * Removes the page title on the shop page
 */
function bellezashop_remove_wc_page_title() {
  return boolval( !is_shop() );
}
add_filter( 'woocommerce_show_page_title', 'bellezashop_remove_wc_page_title' );

/**
 * Removes "Showing all X results" message on the product archive
 * 
 * @since 1.0.0
 * @return void
 */
remove_action( 
  'woocommerce_before_shop_loop',
  'woocommerce_result_count', 20
);

/**
 * Removes product sorting dropdown
 * 
 * @since 1.0.0
 * @return void
 */
remove_action(
  'woocommerce_before_shop_loop',
  'woocommerce_catalog_ordering', 30
);
