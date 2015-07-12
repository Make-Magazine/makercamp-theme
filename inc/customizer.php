<?php
/**
 * Maker Camp Theme Theme Customizer
 *
 * @package Maker Camp Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function makercamp_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function makercamp_theme_customize_preview_js() {
	wp_enqueue_script( 'makercamp_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'makercamp_theme_customize_preview_js' );

/**
 * Added custom customizer for Home, Find a camp, Host a camp, About us, Hidden pages.
 */
require get_template_directory() . '/inc/customizer/customizer-home-page.php';
require get_template_directory() . '/inc/customizer/customizer-map-page.php';
require get_template_directory() . '/inc/customizer/customizer-host-page.php';
require get_template_directory() . '/inc/customizer/customizer-about-page.php';
require get_template_directory() . '/inc/customizer/customizer-hidden-page.php';