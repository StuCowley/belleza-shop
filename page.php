<?php
/**
 * The template for displaying all single posts
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

get_header();

if ( have_posts() ) {
  
  // Loop posts loop
  while( have_posts() ) {
    the_post();
    
    get_template_part( 'template-parts/content/content-page' );
  }

}

get_footer();
