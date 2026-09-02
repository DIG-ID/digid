<?php
/**
 * Template Name: ChatGPT Ads Template
 */

get_header( 'dark' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/chatGPTads/section', 'intro' );
		get_template_part( 'template-parts/pages/chatGPTads/section', 'why-how' );
		get_template_part( 'template-parts/pages/chatGPTads/section', 'why-process' );
		get_template_part( 'template-parts/pages/chatGPTads/section', 'contact' );
	do_action( 'after_main_content' );
get_footer();