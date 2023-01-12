<?php
get_header( 'dark' );
	do_action( 'before_main_content' );
	the_title();
	the_content();
	do_action( 'after_main_content' );
get_footer();
