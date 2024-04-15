<?php
get_header( 'light' );
	do_action( 'before_main_content' );
	if ( have_posts() ) :
		do_action( 'before_post_content' );
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/posts/team/content' );
			get_template_part( 'template-parts/posts/team/portfolio' );
		endwhile;
		do_action( 'after_post_content' );
	endif;
	do_action( 'after_main_content' );
get_footer();
