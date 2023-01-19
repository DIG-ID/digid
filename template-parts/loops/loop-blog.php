<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
			get_template_part( 'template-parts/components/cards/card', 'post' );
	endwhile;
	wp_reset_postdata();
endif;
