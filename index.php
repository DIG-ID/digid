<?php
get_header( 'light' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/blog/section', 'intro' );
	get_template_part( 'template-parts/archives/blog/section', 'filter' );
	get_template_part( 'template-parts/modules/module', 'blog' );
	do_action( 'after_main_content' );
get_footer();
