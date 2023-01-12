<?php
$args = array(
	'post_type'      => 'services',
	'post_status'    => 'publish',
	'posts_per_page' => 6,
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		get_template_part( 'template-parts/components/cards/card', 'service' );
	endwhile;
	wp_reset_postdata();
endif;
