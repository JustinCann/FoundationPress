<?php
/**
 * Allows Daisy to enter in text for the Home Page Content
 *
 * @package Daisy
 * @since Daisy 0.1
 */

if ( ! function_exists( 'wpt_register_homepage_content' ) ) :
function wpt_register_homepage_content( $wp_customize ) {


	//------------------------------------------------------------------------
	// Panels

	// Create custom panels
	$wp_customize->add_panel( 'services_block', array(
	  'priority' => 1000,
	  'theme_supports' => '',
	  'title' => __( 'Homepage Content', 'daisy' ),
	  'description' => __( 'Controls the content in the services block', 'daisy' ),
	) );

	//------------------------------------------------------------------------
	// Sections

	// Create custom field for mobile navigation layout
	$wp_customize->add_section( 'services_block_elements' , array(
		'title'	=> __('Services Block','daisy'),
		'panel' => 'services_block',
		'priority' => 1000,
	));

	//------------------------------------------------------------------------
	// Settings


	// First Service Block Element
	$wp_customize->add_setting(
		'wpt_first_service_block_element',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Second Service Block Element
	$wp_customize->add_setting(
		'wpt_second_service_block_element',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Third Service Block Element
	$wp_customize->add_setting(
		'wpt_third_service_block_element',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Fourth Service Block Element
	$wp_customize->add_setting(
		'wpt_fourth_service_block_element',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);


	//------------------------------------------------------------------------
	// Controls

	// Add control for first service
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'first_services',
			array(
				'label'    => __( 'First Service', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_first_service_block_element',
			)
		)
	);

	// Add control for second service
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'second_services',
			array(
				'label'    => __( 'Second Service', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_second_service_block_element',
			)
		)
	);

	// Add control for third service
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'third_services',
			array(
				'label'    => __( 'Third Service', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_third_service_block_element',
			)
		)
	);

	// Add control for fourth service
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fourth_services',
			array(
				'label'    => __( 'Fourth Service', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_fourth_service_block_element',
			)
		)
	);

}

add_action( 'customize_register', 'wpt_register_homepage_content' );

// Add class to body to help w/ CSS
// add_filter( 'body_class', 'mobile_nav_class' );
// function mobile_nav_class( $classes ) {
// 	if ( ! get_theme_mod( 'wpt_services_block_elements' ) || get_theme_mod( 'wpt_services_block_elements' ) == 'offcanvas' ) :
// 		$classes[] = 'offcanvas';
// 	elseif ( get_theme_mod( 'wpt_services_block_elements' ) == 'topbar' ) :
// 		$classes[] = 'topbar';
// 	endif;
// 	return $classes;
// }
endif;
