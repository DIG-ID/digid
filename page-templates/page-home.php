<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/home/section', 'hero' );
	get_template_part( 'template-parts/home/section', 'intro' );
	get_template_part( 'template-parts/home/section', 'services' );
	get_template_part( 'template-parts/home/section', 'projects' );
	get_template_part( 'template-parts/home/section', 'testimonials' );
	get_template_part( 'template-parts/home/section', 'form' );
	get_template_part( 'template-parts/home/section', 'blog' );
	do_action( 'after_main_content' );
get_footer();
