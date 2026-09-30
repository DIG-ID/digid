<?php
$args = array(
	'post_type'   => 'post',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'numberposts' => 3,
);
$recent_posts = get_posts( $args );
foreach ( $recent_posts as $post ) :
	// Teasers sit below the section's H2, so their titles are H3s.
	get_template_part( 'template-parts/components/cards/card', 'post', array( 'heading' => 'h3' ) );
endforeach;
wp_reset_postdata();
