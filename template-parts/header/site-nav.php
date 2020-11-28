<?php
/**
 * Displays the site navigation
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

?>

<nav class="sc-header-menu">
  <div class="sc-header-menu-container">

    <?php
    $menuDefaults = array(
      'theme_location'  =>  'header',
      'container_class' =>  null
    );

    wp_nav_menu( $menuDefaults );
    ?>
  
  </div><!-- /.sc-header-menu-container -->
</div><!-- /.sc-header-menu -->
