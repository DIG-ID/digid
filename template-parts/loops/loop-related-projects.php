<?php
$pod   = pods( 'services', get_the_id() );
$rpods = $pod->field(
	array(
		'name'     => 'related_projects',
		'output'   => 'objects',
		'orderby'  => 'ID',
    	'order'    => 'DESC',
	),
);
if ( ! empty( $rpods ) ) :
	$count = 0;
	foreach ( $rpods as $rpod ) :
		$count++;
		global $post;
		$post = $rpod;
		setup_postdata( $post );
		if ( $count % 2 == 0 ) :
			get_template_part( 'template-parts/components/cards/card', 'project', array( 'image' => 'landscape' ) );
		else :
			get_template_part( 'template-parts/components/cards/card', 'project', array( 'image' => 'portrait' ) );
		endif;
	endforeach;
	wp_reset_postdata();
endif;
