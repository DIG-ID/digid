<?php
$args = array(
	'post_type'      => 'case_studies',
	'post_status'    => 'publish',
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		if ( $the_query->current_post % 2 == 0 ) :
			get_template_part( 'template-parts/components/cards/card', 'project', array( 'image' => 'landscape' ) );
		else :
			get_template_part( 'template-parts/components/cards/card', 'project', array( 'image' => 'portrait' ) );
		endif;
	endwhile;
	wp_reset_postdata();
endif;
