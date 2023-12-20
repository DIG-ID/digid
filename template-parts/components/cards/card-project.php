<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-project grid-item col-12 col-lg-6 ' . digid_get_related_services() . '' ); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php
		$counter = $args['counter'];
		$project_portrait_image = get_field( 'portrait_featured_image' );

		if ( has_post_thumbnail() || $project_portrait_image ) :
			if ( 'portrait' === $args['image'] ) :
				echo '<figure>' . wp_get_attachment_image( $project_portrait_image, 'card-project-thumbnail-portrait' ) . '</figure>';
			endif;
			if ( 'landscape' === $args['image'] ) :
				$landscape_image_id = get_post_thumbnail_id( get_the_ID() );
				echo '<figure>' . wp_get_attachment_image( $landscape_image_id, 'card-project-thumbnail-landscape' ) . '</figure>';
			endif;
		else :
			echo '<a class="position-relative" href="' . esc_url( get_the_permalink() ) . '"><figure><img src="https://via.placeholder.com/646x733" alt="placeholder image"></figure></a>';
		endif;
		?>
		<div class="card-project__content">
			<?php the_title( '<h3 class="card-project__title">', '</h3> ' );  ?>
			<?php //echo $counter; ?><?php echo //$args['image']; ?>
			<?php get_template_part( 'template-parts/loops/loop', 'related-services' ); ?>
		</div>
	</a>
</article>
