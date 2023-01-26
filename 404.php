<?php
get_header( 'light' );
do_action( 'before_main_content' );
get_template_part( 'template-parts/pages/404/section', 'content' );
do_action( 'after_main_content' );
get_footer();
