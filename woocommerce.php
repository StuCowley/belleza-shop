<?php
/**
 * The template for displaying all single posts
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

get_header();

get_template_part( 'template-parts/hero/shop-hero' );
?>

<div class="sc-page-content">
  <?php woocommerce_content(); ?>
</div><!-- /.sc-page-content -->

<?php
get_footer();
