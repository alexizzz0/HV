<?php
/**
 * prasoon Theme Customizer.
 *
 * @package prasoon
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'prasoon_customize_register' ) ) :
function prasoon_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';	
}
endif;
add_action( 'customize_register', 'prasoon_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'prasoon_customize_preview_js' ) ) :
function prasoon_customize_preview_js() {
	wp_enqueue_script( 'prasoon_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
endif;
add_action( 'customize_preview_init', 'prasoon_customize_preview_js' );
