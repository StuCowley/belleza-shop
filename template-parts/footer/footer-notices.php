<?php
/**
 * Displays footer notices, such as copyright dates, site dev info
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

?>

<div class="sc-footer-notices">
  <div class="sc-footer-copyright">
    &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved
  </div><!-- /.sc-footer-copyright -->

  <div class="sc-footer-author">
    Design &plus; code by 
    <a href="https://github.com/StuCowley" target="new">Stu Cowley</a>
  </div><!-- /.sc-footer-author -->
</div><!-- /.sc-footer-notices -->
