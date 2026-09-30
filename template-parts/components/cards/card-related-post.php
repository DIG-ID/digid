<?php
/**
 * Related post cards (single post sidebar).
 *
 * Uses the Pods "related_posts" relation; falls back to the latest published posts.
 */

$related_ids = array();

if ( is_singular() && function_exists( 'pods' ) ) :
	$pod   = pods( 'post', get_the_id() );
	$rpods = $pod->field( 'related_posts' );
	if ( ! empty( $rpods ) ) :
		foreach ( $rpods as $rpod ) :
			// Skip unpublished posts so the cards never link to a 404.
			if ( 'publish' === get_post_status( $rpod['ID'] ) ) :
				$related_ids[] = (int) $rpod['ID'];
			endif;
		endforeach;
	endif;
endif;

if ( empty( $related_ids ) ) :
	$related_ids = get_posts(
		array(
			'post_type'      => 'post',
			'orderby'        => 'ID',
			'post_status'    => 'publish',
			'order'          => 'DESC',
			'posts_per_page' => 5,
			'post__not_in'   => array( get_the_ID() ),
			'fields'         => 'ids',
		)
	);
endif;

foreach ( $related_ids as $rpod_id ) :
	$image      = wp_get_attachment_image_src( get_post_thumbnail_id( $rpod_id ), 'card-related-post-thumbnail' );
	$categories = get_the_category( $rpod_id );
	$category   = ! empty( $categories ) ? $categories[0]->name : '';
	?>
	<article id="post-<?php echo esc_attr( $rpod_id ); ?>" <?php post_class( 'col-12 col-lg-12 card-related-post', $rpod_id ); ?>>
		<a class="card-related-post__link" href="<?php echo esc_url( get_permalink( $rpod_id ) ); ?>">
			<div class="container card-related-post__content">
				<div class="row">
					<div class="col-4 p-0">
						<?php if ( $image ) : ?>
							<img src="<?php echo esc_url( $image[0] ); ?>" alt="" title="">
						<?php endif; ?>
					</div>
					<div class="col-8 py-3">
						<?php // Full title in the source; the visual truncation is done in CSS (.card-related-post__title). ?>
						<h3 class="card-related-post__title"><?php echo esc_html( get_the_title( $rpod_id ) ); ?></h3>
						<p class="card-related-post__categ"><?php echo esc_html( wp_html_excerpt( $category, 36, '...' ) ); ?></p>
						<p class="card-related-post__text"><?php echo esc_html( wp_html_excerpt( get_the_excerpt( $rpod_id ), 56, '...' ) ); ?></p>
					</div>
				</div>
			</div>
		</a>
	</article>
	<?php
endforeach;
