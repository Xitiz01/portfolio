<?php

/**
 * The header for Portfolio theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */
/**
 * Doctype Hook
 * 
 * @hooked portfolio_doctype
*/
do_action( 'portfolio_doctype' );
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head itemscope itemtype="http://schema.org/WebSite">
<?php
/**
 * Head Hook
 * 
 * @hooked portfolio_head
*/
    do_action( 'portfolio_before_wp_head' );
    wp_head();
    ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <?php wp_body_open();
    
/**
 * Before Header
 * 
 * @hooked portfolio_page_start - 20 
*/
do_action( 'portfolio_before_header' );


/**
 * Header
 * 
 * @hooked portfolio_header_inclusion - 10     
*/
do_action( 'portfolio_header' );	