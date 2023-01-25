<?php
if ( is_singular( 'projects' ) ) :
	$pod = pods( 'projects', get_the_id() );
else :
	$pod = pods( 'case_studies', get_the_id() );
endif;
$rpods = $pod->field( 'related_services' );
if ( ! empty( $rpods ) ) :
	$rnames = array();
	foreach ( $rpods as $rpod ) :
		$rpod_id  = $rpod['ID'];
		$rnames[] = get_the_title( $rpod_id );
	endforeach;
	echo '<ul class="related-services"><li>' . implode( ', </li><li>', $rnames ) . '</li></ul>';
endif;
