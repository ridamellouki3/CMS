<?php
/**
 * Breadcrumb options
 *
 * @package Theme Palace
 * @subpackage  Biographyn
 * @since  Biographyn 1.0.0
 */

$wp_customize->add_section( 'biographyn_breadcrumb',
	array(
		'title'             => esc_html__( 'Breadcrumb','biographyn' ),
		'description'       => esc_html__( 'Breadcrumb section options.', 'biographyn' ),
		'panel'             => 'biographyn_theme_options_panel',
	)
);

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'biographyn_theme_options[breadcrumb_enable]',
	array(
		'sanitize_callback' => 'biographyn_sanitize_switch_control',
		'default'          	=> $options['breadcrumb_enable'],
	)
);

$wp_customize->add_control( new Biographyn_Switch_Control( $wp_customize,
	'biographyn_theme_options[breadcrumb_enable]',
		array(
			'label'            	=> esc_html__( 'Enable Breadcrumb', 'biographyn' ),
			'section'          	=> 'biographyn_breadcrumb',
			'on_off_label' 		=> biographyn_switch_options(),
		)
	)
);

// Breadcrumb separator setting and control.
$wp_customize->add_setting( 'biographyn_theme_options[breadcrumb_separator]',
	array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'          	=> $options['breadcrumb_separator'],
	)
);

$wp_customize->add_control( 'biographyn_theme_options[breadcrumb_separator]',
	array(
		'label'            	=> esc_html__( 'Separator', 'biographyn' ),
		'active_callback' 	=> 'biographyn_is_breadcrumb_enable',
		'section'          	=> 'biographyn_breadcrumb',
	)
);
