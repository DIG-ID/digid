<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/pages/home/section', 'hero' );
	get_template_part( 'template-parts/pages/home/section', 'intro' );
	get_template_part( 'template-parts/modules/module', 'services' );
	get_template_part( 'template-parts/modules/module', 'latest-projects' );
	get_template_part( 'template-parts/modules/module', 'testimonials' );
	get_template_part( 'template-parts/pages/home/section', 'form' );
	get_template_part( 'template-parts/pages/home/section', 'blog' );
	do_action( 'after_main_content' );
get_footer();
