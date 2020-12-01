<?php
/**
 * Template part for displaying the frontpage hero.
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

if ( have_rows( 'hero_slide' ) ) :
  while ( have_rows( 'hero_slide' ) ) : the_row();
    
    $headlineHeading = get_sub_field( 'headline_heading' );
    $headlineParagraph = get_sub_field( 'headline_paragraph' );
    $bgImg = get_sub_field( 'background_image' );
    $bgColour = get_sub_field( 'background_colour' );

    // If the hero has a background image, echo the image
    if ( $bgImg ) {
?>

<section class="sc-hero-feature" style="background-image: url('<?php echo $bgImg; ?>');">

<?php 
// Else if there is no background image applied, use the set background colour
} elseif( $bgColour ) { 
?>

<section class="sc-hero-feature" style="background-color: <?php echo $bgColour; ?>">

<?php } ?>
  
  <!-- ADD HERO MARKUP HERE -->
  <div class="sc-hero-feature-container">
    <h2>
      <?php echo $headlineHeading; ?>
    </h2>

    <p>
      <?php echo $headlineParagraph; ?>
    </p>
  </div><!-- /.sc-hero-feature-container -->
</section><!-- /.sc-hero-feature -->

<?php
endwhile;
else :
  // Do something
endif;
