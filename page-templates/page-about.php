<?php
/**
 * Template Name: About Page Template
 */

get_header( 'dark' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/about/section', 'intro' );
		//get_template_part( 'template-parts/pages/about/section', 'team' );
		get_template_part( 'template-parts/pages/about/section', 'team-full-time' );
		get_template_part( 'template-parts/pages/about/section', 'team-freelancers' );
		get_template_part( 'template-parts/pages/about/section', 'contact' );
		//get_template_part( 'template-parts/pages/about/section', 'blog' );
		get_template_part( 'template-parts/pages/about/section', 'partners' );
	do_action( 'after_main_content' );
get_footer();