<?php
/**
 * Functions and definitions
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

if ( ! function_exists( 'bellezashop_setup' ) ) {
  /**
   * Sets up theme defaults and registers support for various WordPress features
   * 
   * @since 1.0.0
   * @return void
   */
  function bellezashop_setup() {
    /**
     * Let WordPress manage the document title.
     * This theme does not use a hard-coded <title> tag in the document head, 
     * WordPress will provide it for us.
     */
    add_theme_support( 'title-tag' );


    /**
     * Register the header and footer menus
     */
    register_nav_menus(
      array(
        'header'  =>  esc_html__( 'Header menu', 'bellezashop' ),
        'footer'  =>  esc_html__( 'Footer menu', 'bellezashop' ),
      )
    );


    /**
     * Add support for the custom logo
     */
    $logoWidth = 300;
    $logoHeight = 100;

    add_theme_support(
      'custom-logo',
      array(
        'height'                => $logoHeight,
        'width'                 => $logoWidth,
        'flex-width'            => true,
        'flex-height'           => true,
        'unlink-homepage-logo'  => false,
      )
    );


    /**
     * Load the required the WooCommerce functions file
     */
    require get_template_directory() . '/inc/woocommerce-functions.php';
  }
}
add_action( 'after_setup_theme', 'bellezashop_setup' );
