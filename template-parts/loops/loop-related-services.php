<?php
$related_services = get_field( 'related_services' );
if ( $related_services ) :
	$services_names = array();
	foreach ( $related_services as $post ) :
		setup_postdata( $post );
		$services_names[] = get_the_title();
	endforeach;
	echo '<ul class="related-services"><li>' . implode( ', </li><li>', $services_names ) . '</li></ul>';
	wp_reset_postdata();
endif;
