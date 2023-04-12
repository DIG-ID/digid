<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-project grid-item col-12 col-lg-6 ' . digid_get_related_services() . '' ); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		the_post_thumbnail( 'card-project-thumbnail-portrait' );
	else :
		echo '<a class="position-relative" href="' . esc_url( get_the_permalink() ) . '"><figure><img src="https://via.placeholder.com/646x733" alt="placeholder image"></figure></a>';
	endif;
	?>
	<a href="<?php the_permalink(); ?>" class="card-project__hover-title"><?php the_title( '<h3>', '</h3> ' ); ?></a>
	<div class="card-project__content">
		<a href="<?php the_permalink(); ?>" class="card-project__title"><?php the_title( '<h3>', '</h3> ' ); ?></a>
		<?php get_template_part( 'template-parts/loops/loop', 'related-services' ); ?>
	</div>
</article>
