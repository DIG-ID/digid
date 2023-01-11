<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-project grid-item col-12 col-lg-6' ); ?>>
	<img src="https://via.placeholder.com/529x343" alt="">
	<a href="<?php the_permalink(); ?>" class="card-service__title"><?php the_title( '<h3>', '</h3> ' ); ?></a>
	<?php
	$term_obj_list = get_the_terms( $post->ID, 'taxonomy' );
	$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
	echo $terms_string;
	?>
</article>
