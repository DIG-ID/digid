<?php
/**
 * Local ACF field groups registered in code.
 */

/**
 * Register the "SEO H1" fields.
 *
 * Singular pages/services use `seo_h1`. The CPT archive option pages share the
 * `options_*` namespace, so each one gets its own prefixed name (like the
 * existing `services_archive_title`) to avoid overwriting each other.
 */
function digid_register_seo_h1_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) :
		return;
	endif;

	$instructions = __( "Keyword-H1, max. 65 characters, e.g. 'Web-Entwicklung & Webdesign – dig.id Basel'", 'digid' );

	$seo_h1_field = function ( $key, $name ) use ( $instructions ) {
		return array(
			'key'                 => $key,
			'label'               => 'SEO H1',
			'name'                => $name,
			'type'                => 'text',
			'instructions'        => $instructions,
			'required'            => 0,
			'maxlength'           => 65,
			// ACFML: translate this field per language.
			'wpml_cf_preferences' => 2,
		);
	};

	acf_add_local_field_group(
		array(
			'key'                    => 'group_digid_seo_h1',
			'title'                  => 'SEO H1',
			'fields'                 => array(
				$seo_h1_field( 'field_digid_seo_h1', 'seo_h1' ),
			),
			'location'               => array(
				array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'services' ) ),
				array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-home.php' ) ),
				array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-about.php' ) ),
				array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-chatgptads.php' ) ),
				array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-starting-project.php' ) ),
				array( array( 'param' => 'page_type', 'operator' => '==', 'value' => 'posts_page' ) ),
			),
			'menu_order'             => 0,
			'position'               => 'acf_after_title',
			'acfml_field_group_mode' => 'advanced',
		)
	);

	$archives = array(
		'services'     => 'acf-options-services-archive',
		'case_studies' => 'acf-options-case-studies-archive',
		'jobs'         => 'acf-options-jobs-archive',
	);

	foreach ( $archives as $post_type => $options_page ) :
		acf_add_local_field_group(
			array(
				'key'                    => 'group_digid_seo_h1_' . $post_type . '_archive',
				'title'                  => 'SEO H1',
				'fields'                 => array(
					$seo_h1_field( 'field_digid_' . $post_type . '_archive_seo_h1', $post_type . '_archive_seo_h1' ),
				),
				'location'               => array(
					array( array( 'param' => 'options_page', 'operator' => '==', 'value' => $options_page ) ),
				),
				'menu_order'             => 0,
				'acfml_field_group_mode' => 'advanced',
			)
		);
	endforeach;
}

add_action( 'acf/init', 'digid_register_seo_h1_fields' );
