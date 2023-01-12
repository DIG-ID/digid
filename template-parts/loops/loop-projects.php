<?php
$args = array(
	'post_type'      => 'projects',
	'post_status'    => 'publish',
	'posts_per_page' => 5,
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		switch ( $the_query->current_post ) :
			case 1:
			case 2:
				get_template_part( 'template-parts/components/cards/card', 'project-portrait' );
				break;
			default:
				get_template_part( 'template-parts/components/cards/card', 'project-landscape' );
				break;
		endswitch;
	endwhile;
	wp_reset_postdata();
endif;
