<?php

// Adds customizer section for the social icons.
$wp_customize->add_section(
	'jobs_section',
	array(
		'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Jobs', 'digid' ),
		'description'    => __( 'Edit here the Jobs Button', 'digid' ),
		'panel'          => 'digid_theme_panel',
	)
);

//Start
$wp_customize->add_setting(
	'jobs_project',
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
		'jobs_project',
		array(
			'label'   => __( 'Start a Project URL', 'digid' ),
			'type'    => 'url',
			'section' => 'jobs_section',
		)
	)
);
