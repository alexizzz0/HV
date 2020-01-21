<?php
/**
 * Template Name: Custom Template
 *
 * Displays the Custom Template of the theme.
 * @package Prasoon
 */

get_header();

if ( is_active_sidebar( 'custom-sidebar' ) ) {
	dynamic_sidebar( 'custom-sidebar' );
}

get_footer();

?>