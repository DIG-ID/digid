<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-project grid-item col-12 col-lg-6' ); ?>>
	<img src="https://via.placeholder.com/529x601" alt="">
	<a href="<?php the_permalink(); ?>" class="card-service__title"><?php the_title( '<h3>', '</h3> ' ); ?></a>
	<?php get_template_part( 'template-parts/loops/loop', 'related-services' ); ?>
</article>
