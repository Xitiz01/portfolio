<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

/**
 * Footer
 * 
 * @hooked portfolio_footer_start  - 20
 * @hooked portfolio_footer_bottom - 40
 * @hooked portfolio_footer_end    - 50	
*/
do_action( 'portfolio_footer' );

/**
 * After Footer
 * 
 * @hooked portfolio_page_end        - 10
*/
do_action( 'portfolio_after_footer' );

wp_footer(); ?>
</body>
</html>
