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

/**
 * Enqueue scripts and styles
 * 
 * @since 1.0.0
 * @return void
 */
function bellezashop_scripts() {
  wp_enqueue_style( 'bellezashop-style', get_template_directory_uri() . '/style.css' );
  
  // Orisue UI script
  wp_enqueue_script( 
    'bellezashop-orisue-ui', 
    get_template_directory_uri() . '/assets/js/orisue-ui.js',
    true
  );
}
add_action( 'wp_enqueue_scripts', 'bellezashop_scripts' );

/**
 * Enable SVG upload
 * 
 * Enables the ability to upload images that use the .svg extension. This 
 * functionality is not compatible with WordPress for some reason, it is 2020 
 * by the way.
 * 
 * @since 1.0.0
 * @return void
 */

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  global $wp_version;
  
  if ( $wp_version !== '4.7.1' ) {
    return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
    'ext'             => $filetype['ext'],
    'type'            => $filetype['type'],
    'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function bellezashop_fix_svg() {
  echo 
  '<style type="text/css">
    .attachment-266x266, .thumbnail img {
      width: 100% !important;
      height: auto !important;
    }
  </style>';
}
add_action( 'admin_head', 'bellezashop_fix_svg' );
