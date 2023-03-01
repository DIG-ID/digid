<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-12 col-lg-4 card-post ' . digid_get_related_categories() . '' ); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		the_post_thumbnail( 'card-post-thumbnail' );
	else :
		echo '<a href="' . esc_url( get_the_permalink() ) . '"><figure><img src="https://via.placeholder.com/416x304" alt="placeholder image"></figure></a>';
	endif;
	?>
	<a href="<?php the_permalink(); ?>" class="card-post__title"><?php the_title( '<h3>', '</h3> '); ?></a>
	<?php get_template_part( 'template-parts/loops/loop', 'related-categories' ); ?>
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>" class="card-post__btn"><?php esc_html_e( 'Read more', 'digid' ); ?></a>
</article>
