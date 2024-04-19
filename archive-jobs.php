<?php
get_header( 'light' );
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/jobs/section', 'intro' );
	get_template_part( 'template-parts/archives/jobs/section', 'jobs-list' );
	do_action( 'after_main_content' );
get_footer();
