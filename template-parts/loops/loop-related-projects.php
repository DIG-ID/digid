<?php
$pod   = pods( 'services', get_the_id() );
$rpods = $pod->field(
	array(
		'name'   => 'related_projects',
		'output' => 'objects',
	),
);
if ( ! empty( $rpods ) ) :
	$count = 0;
	foreach ( $rpods as $rpod ) :
		$count++;
		global $post;
		$post = $rpod;
		setup_postdata( $post );
		switch ( $count ) :
			case 1:
			case 2:
				get_template_part( 'template-parts/components/cards/card', 'project-portrait' );
				break;
			default:
				get_template_part( 'template-parts/components/cards/card', 'project-landscape' );
				break;
		endswitch;
	endforeach;
	wp_reset_postdata();
endif;
