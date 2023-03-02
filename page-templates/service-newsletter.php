<?php
/**
 * Template Name: Service Newsletter Marketing
 * Template Post Type: services
 */

 get_header( 'light' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/services/newsletter-marketing/section', 'intro' );
	do_action( 'after_main_content' );
get_footer();
