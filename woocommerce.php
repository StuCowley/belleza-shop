<?php
/**
 * The template for displaying WooCommerce
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

get_header();

get_template_part( 'template-parts/hero/shop-hero' );
?>

<div class="woocommerce sc-page-content">
  <?php woocommerce_content(); ?>
</div><!-- /.sc-page-content -->

<?php
get_footer();
