<?php
/**
 * The template for displaying all single posts
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

get_header();
?>

<div class="sc-page-content">
  <?php woocommerce_content(); ?>
</div><!-- /.sc-page-content -->

<?php
get_footer();
