<?php
/**
 * Template part for displaying page content in page.php
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="sc-page-content">
    <?php the_content(); ?>
  </div><!-- /.sc-page-content -->
</article><!-- /#post-<?php the_ID(); ?> -->
