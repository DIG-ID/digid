<?php
$args = array(
	'post_type'      => 'projects',
	'post_status'    => 'publish',
	'orderby'        => 'ID',
	'order'          => 'DESC',
	'posts_per_page' => -1,
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
	$counter = 0;
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		if ( $the_query->current_post % 2 == 0 ) :
			get_template_part( 'template-parts/components/cards/card', 'project', array( 'image' => 'landscape', 'counter' => $counter ) );
		else :
			get_template_part( 'template-parts/components/cards/card', 'project', array( 'image' => 'portrait', 'counter' => $counter ) );
		endif;
		$counter++;
	endwhile;
	wp_reset_postdata();
endif;
