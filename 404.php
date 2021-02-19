<?php
/**
 * Template for display 404 pages (not found)
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

get_header();
?>

<div class="sc-page-content sc-404-page">
  <h1>404</h1>
  <h2>Page not found</h2>

  <p>
    Oops! The page you were looking for does not exist. It might have been moved or deleted.
  </p>

  <a href="<?php bloginfo( 'url' ); ?>">
    Back to home
  </a>
</div><!-- /.sc-page-content -->
