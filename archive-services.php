<?php
get_header( 'light' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/services/section', 'intro' );
	get_template_part( 'template-parts/archives/services/section', 'services-list' );
	get_template_part( 'template-parts/modules/module', 'latest-projects' );
	do_action( 'after_main_content' );
get_footer();
