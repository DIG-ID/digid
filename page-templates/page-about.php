<?php
/**
 * Template Name: About Page Template
 */

get_header('dark');
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/pages/about/section', 'intro' );
	do_action( 'after_main_content' );
get_footer();