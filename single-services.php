<?php
get_header( 'dark' );
	do_action( 'before_main_content' );
	do_action( 'before_post_content' );
	get_template_part( 'template-parts/posts/services/service', 'intro' );
	get_template_part( 'template-parts/loops/loop', 'blocks' );
	get_template_part( 'template-parts/modules/module', 'call-to-action' );
	do_action( 'after_post_content' );
	do_action( 'after_main_content' );
get_footer();

