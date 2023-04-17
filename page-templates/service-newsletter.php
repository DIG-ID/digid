<?php
/**
 * Template Name: Service Newsletter Marketing
 * Template Post Type: services
 */

get_header( 'light' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/services/section', 'intro-child' );
	get_template_part( 'template-parts/archives/services/newsletter-marketing/services', 'overview' );
	if ( get_field( 'section_reporting_enable_section' ) ) :
		get_template_part( 'template-parts/archives/services/newsletter-marketing/reporting' );
	endif;
	if ( get_field( 'section_tiers_enable_section' ) ) :
		get_template_part( 'template-parts/archives/services/newsletter-marketing/tiers' );
	endif;
	get_template_part( 'template-parts/modules/module', 'call-to-action' );
	get_template_part( 'template-parts/modules/module', 'related-services' );
	get_template_part( 'template-parts/modules/module', 'related-projects' );
	do_action( 'after_main_content' );
get_footer();
