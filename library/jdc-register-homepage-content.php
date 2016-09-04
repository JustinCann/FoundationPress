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


	// Heading

	// First Service Block Heading
	$wp_customize->add_setting(
		'wpt_first_services_block_heading',
		array(
			'default'          	=> __( 'Enter in a short heading', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Second Service Block Heading
	$wp_customize->add_setting(
		'wpt_second_services_block_heading',
		array(
			'default'          	=> __( 'Enter in a short heading', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Third Service Block Heading
	$wp_customize->add_setting(
		'wpt_third_services_block_heading',
		array(
			'default'          	=> __( 'Enter in a short heading', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Fourth Service Block Heading
	$wp_customize->add_setting(
		'wpt_fourth_services_block_heading',
		array(
			'default'          	=> __( 'Enter in a short heading', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Textarea

	// First Service Block Textarea
	$wp_customize->add_setting(
		'wpt_first_services_block_textarea',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Second Service Block Textarea
	$wp_customize->add_setting(
		'wpt_second_services_block_textarea',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Third Service Block Textarea
	$wp_customize->add_setting(
		'wpt_third_services_block_textarea',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Fourth Service Block Textarea
	$wp_customize->add_setting(
		'wpt_fourth_services_block_textarea',
		array(
			'default'          	=> __( 'Enter in some text for the website', 'daisy' ),
			'sanitize_callback'	=> 'sanitize_text_field',
		)
	);

	// Images

	// First Service Block Image
	$wp_customize->add_setting(
		'wpt_first_services_block_image',
		array(
			'default'          	=> __( 'Select an image for your first service', 'daisy' ),
			// 'sanitize_callback'	=> 'sanitize_file_name',
		)
	);

	// Second Service Block Image
	$wp_customize->add_setting(
		'wpt_second_services_block_image',
		array(
			'default'          	=> __( 'Select an image for your second service', 'daisy' ),
			// 'sanitize_callback'	=> 'sanitize_file_name',
		)
	);

	// Third Service Block Image
	$wp_customize->add_setting(
		'wpt_third_services_block_image',
		array(
			'default'          	=> __( 'Select an image for your third service', 'daisy' ),
			// 'sanitize_callback'	=> 'sanitize_file_name',
		)
	);

	// Fourth Service Block Image
	$wp_customize->add_setting(
		'wpt_fourth_services_block_image',
		array(
			'default'          	=> __( 'Select an image for your fourth service', 'daisy' ),
			// 'sanitize_callback'	=> 'sanitize_file_name',
		)
	);


	//------------------------------------------------------------------------
	// Controls

	//-----------------------------

	// Add control for first heading
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'first_services_heading',
			array(
				'label'    => __( 'First Heading', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_first_services_block_heading',
			)
		)
	);

	// Add control for first image
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'first_services_image',
			array(
				'label'    => __( 'First Image', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_first_services_block_image',
			)
		)
	);

	// Add control for first textarea
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'first_services_textarea',
			array(
				'label'    => __( 'First Service Text Area', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_first_services_block_textarea',
			)
		)
	);

	//-----------------------------

	// Add control for second heading
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'second_services_heading',
			array(
				'label'    => __( 'Second Heading', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_second_services_block_heading',
			)
		)
	);

	// Add control for second image
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'second_services_image',
			array(
				'label'    => __( 'Second Image', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_second_services_block_image',
			)
		)
	);

	// Add control for second service
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'second_services_textarea',
			array(
				'label'    => __( 'Second Service Text Area', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_second_services_block_textarea',
			)
		)
	);

	//-----------------------------

	// Add control for third heading
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'third_services_heading',
			array(
				'label'    => __( 'Third Heading', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_third_services_block_heading',
			)
		)
	);

	// Add control for third image
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'third_services_image',
			array(
				'label'    => __( 'Third Image', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_third_services_block_image',
			)
		)
	);

	// Add control for third service
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'third_services_textarea',
			array(
				'label'    => __( 'Third Service Text Area', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_third_services_block_textarea',
			)
		)
	);

	//-----------------------------


	// Add control for fourth heading
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fourth_services_heading',
			array(
				'label'    => __( 'Fourth Heading', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_fourth_services_block_heading',
			)
		)
	);

	// Add control for fourth image
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'fourth_services_image',
			array(
				'label'    => __( 'Fourth Image', 'daisy' ),
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_fourth_services_block_image',
			)
		)
	);

	// Add control for fourth service
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fourth_services_textarea',
			array(
				'label'    => __( 'Fourth Service Text Area', 'daisy' ),
				'type'		=> 'textarea',
				'section' 	=> 'services_block_elements',
				'settings' 	=> 'wpt_fourth_services_block_textarea',
			)
		)
	);

	//-----------------------------

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
