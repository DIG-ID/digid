<?php
/**
 * Template Name: Services Page Template
 */

get_header( 'light' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/services/section', 'intro' );
	get_template_part( 'template-parts/archives/services/section', 'services-list' );
	get_template_part( 'template-parts/modules/module', 'projects' );
	do_action( 'after_main_content' );
get_footer();
