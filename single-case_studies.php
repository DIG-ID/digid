<?php
get_header( 'dark' );
	do_action( 'before_main_content' );
	if ( have_posts() ) :
		do_action( 'before_post_content' );
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/posts/case-studies/case-studie', 'banner' );
			get_template_part( 'template-parts/posts/case-studies/case-studie', 'intro' );
			get_template_part( 'template-parts/posts/case-studies/case-studie', 'content' );

		endwhile;
		do_action( 'after_post_content' );
	endif;
	do_action( 'after_main_content' );
get_footer();
