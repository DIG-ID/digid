<?php
/**
 * Template Name: Starting Project Page Template
 */

get_header();
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/pages/starting-project/section', 'form' );
	get_template_part( 'template-parts/pages/starting-project/section', 'kontakt' );
	do_action( 'after_main_content' );
get_footer();