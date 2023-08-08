<?php
$args = array(
	'post_type'   => 'projects',
	'post_status' => 'publish',
	'orderby'     => 'ID',
	'order'       => 'DESC',
	'posts_per_page' => -1
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		// Determine which template to use based on the $alternate flag
		if ( $alternate ) {
			get_template_part( 'template-parts/components/cards/card', 'project-portrait' );
		} else {
			get_template_part( 'template-parts/components/cards/card', 'project-landscape' );
		}

		// Toggle the $alternate flag for the next iteration
		$alternate = ! $alternate;
	endwhile;
	wp_reset_postdata();
endif;
