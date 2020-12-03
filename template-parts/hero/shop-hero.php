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
    
    $primaryBtnTitle = get_sub_field( 'primary_button_title' );
    $primaryBtnLink = get_sub_field( 'primary_button_link' );

    $secondaryBtnTitle = get_sub_field( 'secondary_button_title' );
    $secondaryBtnLink = get_sub_field( 'secondary_button_link' );
    
    $bgImg = get_sub_field( 'background_image' );
    $bgImgOverlay = get_sub_field( 'background_overlay' );
    $bgColour = get_sub_field( 'background_colour' );
    $bgTextColour = get_sub_field( 'background_text_colour' );

    // If the hero has a background image, echo the image
    if ( $bgImg ) {
?>

<div id="shop-hero-slider">
  <section class="sc-hero-feature" style="background-image: url('<?php echo $bgImg; ?>'); background-color: <?php echo $bgImgOverlay; ?>; color: <?php echo $bgTextColour; ?> !important;">

  <?php 
  // Else if there is no background image applied, use the set background colour
  } elseif( $bgColour ) { 
  ?>

  <section class="sc-hero-feature" style="background-color: <?php echo $bgColour; ?>">

  <?php } ?>
    <div class="carousel-cell">
      <div class="sc-hero-feature-container">
        <h2 style="color: <?php echo $bgTextColour; ?>">
          <?php echo $headlineHeading; ?>
        </h2>

        <p style="color: <?php echo $bgTextColour; ?>">
          <?php echo $headlineParagraph; ?>
        </p>

        <?php if ( $primaryBtnTitle ) { ?>
        <div class="sc-hero-feature-btn-group">
          <div>
            <a href="<?php echo $primaryBtnLink; ?>" class="sc-hero-feature-btn sc-hero-feature-btn-primary">
              <?php echo $primaryBtnTitle; ?>
            </a>
          </div>
        <?php } ?>

        <?php if ( $secondaryBtnTitle )  { ?>
          <span></span>

          <div>
            <a href="<?php echo $secondaryBtnLink ?>" class="sc-hero-feature-btn sc-hero-feature-btn-secondary">
              <?php echo $secondaryBtnTitle ?>
            </a>
          </div>
        </div><!-- /.sc-hero-feature-btn-group -->
        <?php } ?>
      </div><!-- /.sc-hero-feature-container -->
    </div><!-- /.carousel-cell -->
  </section><!-- /.sc-hero-feature -->

  <?php
  endwhile;
  endif;
  ?>
</div><!-- /#shop-hero-slider -->
