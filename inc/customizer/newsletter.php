<?php

// Adds customizer section for the social icons.
$wp_customize->add_section(
	'newsletter_section',
	array(
		'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Newsletter', 'digid' ),
		'description'    => __( 'Edit here the shortcode for digid newsletter', 'digid' ),
		'panel'          => 'digid_theme_panel',
	)
);

//Newsletter
$wp_customize->add_setting(
	'newsletter_sc',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'newsletter_sc',
		array(
			'label'   => __( 'Newsletter Shortcode', 'digid' ),
			'type'    => 'text',
			'section' => 'newsletter_section',
		)
	)
);