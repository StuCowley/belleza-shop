<?php
/**
 * Displays the footer navigation
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

?>

<div>
  <nav class="sc-footer-nav">
    <?php
    /** 
     * Display the primary footer navigation menu, which shares the header menu
     * 
     * @package StuCowley
     * @subpackage bellezashop
     * @since 1.0.0
     */

    $menuDefaults = array(
      'theme_location'  =>  'header',
      'container_class' =>  null
    );

    wp_nav_menu( $menuDefaults );
    ?>
  </nav><!-- /.sc-footer-nav -->

  <nav class="sc-footer-nav">
  <?php
    /** 
     * Display the primary footer navigation menu, which shares the header menu
     * 
     * @package StuCowley
     * @subpackage bellezashop
     * @since 1.0.0
     */

    $menuDefaults = array(
      'theme_location'  =>  'policies',
      'container_class' =>  null
    );

    wp_nav_menu( $menuDefaults );
    ?>
  </nav><!-- /.sc-footer-nav -->
</div>
