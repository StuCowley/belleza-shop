<?php
/**
 * Displays the header site branding
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

$showSiteName = get_bloginfo( 'name' );
?>

<div class="sc-site-branding">
  <span>
    <?php 
    /** 
     * If a custom logo is in use, display the custom logo, else just display 
     * the name of the site.
     */
    if ( has_custom_logo() && $showSiteName ) {
      the_custom_logo();
    } else {
      echo $showSiteName;
    }
    ?>
  </span>
</div><!-- /.sc-site-branding -->
