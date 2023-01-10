<?php
$services_posts = get_field( 'services_posts' );
if ( $services_posts ) :
	foreach ( $services_posts as $post ) :
		setup_postdata( $post );
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-12 col-lg-4 card-service' ); ?>>
			<a href="<?php the_permalink(); ?>" class="card-service__title"><?php the_title( '<h3>', '</h3> '); ?></a>
			<?php the_excerpt(); ?>
			<hr>
			<a href="<?php the_permalink(); ?>" class="card-service__btn">Know more <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
		</article>
		<?php
	endforeach;
	wp_reset_postdata();
endif;
