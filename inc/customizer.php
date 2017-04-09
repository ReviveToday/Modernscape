<?php
/**
 * Modernscape Theme Customizer.
 *
 * @package Modernscape
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function modernscape_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';;
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_setting( 'modernscape_logo' , array ( 'default' => '',
    	'transport' => 'postMessage',
    	'sanitize_callback' => 'esc_url_raw'
    ));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'modernscape_logo', array(
			'label'    => __( 'Add Logotype (Replaces Title & Slogan)', 'modernscape' ),
			'section'  => 'title_tagline',
			'settings' => 'modernscape_logo',
			'transport' => 'postMessage',
			'sanitize_callback' => 'esc_url_raw',
	) ) );
}
add_action( 'customize_register', 'modernscape_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function modernscape_customize_preview_js() {
	wp_enqueue_script( 'modernscape_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'modernscape_customize_preview_js' );
