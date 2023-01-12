<?php
$args = array(
	'post_type'   => 'testimonials',
	'post_status' => 'publish',
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		?>
		<div class="swiper-slide">
			<blockquote class="testimonial-blockquote">
				<div class="testimonial-blockquote__content"><?php the_content(); ?></div>
				<footer class="testimonial-blockquote__info"><span><?php the_field( 'client_name' ); ?></span> <br><?php the_field( 'position_company_name' ); ?></footer>
			</blockquote>
		</div>
		<?php
	endwhile;
	wp_reset_postdata();
endif;
