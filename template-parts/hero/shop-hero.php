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
    
    $bgImg = get_sub_field( 'background_image' );
    $bgColour = get_sub_field( 'background_colour' );

    // If the hero has a background image, echo the image
    if ( $bgImg ) {
?>

<section style="background-image: url('<?php echo $bgImg; ?>');">

<?php 
// Else if there is no background image applied, use the set background colour
} elseif( $bgColour ) { 
?>

<section style="background-color: <?php echo $bgColour; ?>">

<?php } ?>
  
  <!-- ADD HERO MARKUP HERE -->
</section>

<?php
endwhile;
else :
  // Do something
endif;
