<?php
get_header( 'dark' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/case-studies/section', 'intro' );
	get_template_part( 'template-parts/modules/module', 'projects' );
	do_action( 'after_main_content' );
get_footer();
