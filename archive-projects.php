<?php
get_header( 'light' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/projects/section', 'intro' );
	get_template_part( 'template-parts/archives/projects/section', 'filter' );
	get_template_part( 'template-parts/modules/module', 'projects' );
	do_action( 'after_main_content' );
get_footer();
