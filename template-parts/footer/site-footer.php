<?php
/**
 * Displays the site footer
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

?>

<footer class="sc-page-footer">
  <div class="sc-page-footer-container">
    <div class="sc-footer-grid">
      <?php get_template_part( 'template-parts/footer/footer-branding' ); ?>
      <?php get_template_part( 'template-parts/footer/footer-contact' ); ?>
      <?php get_template_part( 'template-parts/footer/footer-nav' ); ?>
    </div>
    
    <?php get_template_part( 'template-parts/footer/footer-notices' ); ?>
  </div><!-- /.sc-footer-grid -->
</footer><!-- /.sc-page-footer -->
