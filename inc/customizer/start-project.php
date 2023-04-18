<?php

// Adds customizer section for the social icons.
$wp_customize->add_section(
	'start_section',
	array(
		'priority'       => 60,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Start a Project', 'digid' ),
		'description'    => __( 'Edit here the Start a project Button', 'digid' ),
		'panel'          => 'digid_theme_panel',
	)
);

//Start
$wp_customize->add_setting(
	'start_project',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'start_project',
		array(
			'label'   => __( 'Start a Project URL', 'digid' ),
			'type'    => 'url',
			'section' => 'start_section',
		)
	)
);