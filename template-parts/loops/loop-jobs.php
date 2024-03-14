<?php
$args = array(
	'post_type'   => 'job',
	'post_status' => 'publish',
	/*'tax_query'   => array(
		array(
			'taxonomy' => 'job_position', // Custom taxonomy slug
			'operator' => 'EXISTS', // Check if the post has any term from this taxonomy
		),
	),*/
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		// Get the terms (categories) the current post belongs to
		$jobs_cats = get_the_terms( get_the_ID(), 'job_position' );
		$job_slug = '';
		if ( $jobs_cats ) :
			foreach ( $jobs_cats as $jobs_cat ) :
					$job_slug = $jobs_cat->slug;
					break;
			endforeach;
	endif;
		get_template_part( 'template-parts/components/cards/card', 'job', array( 'slug' => $job_slug ) );
	endwhile;
	wp_reset_postdata();
endif;
