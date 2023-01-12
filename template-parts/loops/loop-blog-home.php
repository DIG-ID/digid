<?php
$args = array(
	'post_type'   => 'post',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'numberposts' => 3,
);
$recent_posts = get_posts( $args );
foreach ( $recent_posts as $post ) :
	get_template_part( 'template-parts/components/cards/card', 'post' );
endforeach;
wp_reset_postdata();
