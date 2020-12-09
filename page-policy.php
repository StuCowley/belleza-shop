<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

/* Template Name: Policy Page */

get_header();

if ( have_posts() ) {
  
  // Loop posts loop
  while( have_posts() ) {
    the_post();
?>

  <div class="sc-policy-page">

    <?php
      get_template_part( 'template-parts/content/content-page' );
    }
    ?>

  </div>
<?php
}

get_footer();
