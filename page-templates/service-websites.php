<?php
/**
 * Template Name: Service Websites
 * Template Post Type: services
 */

get_header('light');
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/services/section', 'intro-child' );
	get_template_part( 'template-parts/archives/services/websites/websites', 'blocks' );
	get_template_part( 'template-parts/modules/module', 'call-to-action' );
	get_template_part( 'template-parts/modules/module', 'related-projects' );
	do_action( 'after_main_content' );
get_footer();
