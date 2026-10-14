<?php
/**
 * Project gallery: images two by two. With an odd number of images, the last one goes full width.
 */
$images = get_field( 'project_gallery' );

if ( $images ) :
	$last_index = count( $images ) - 1;
	$odd        = 1 === count( $images ) % 2;
	?>
	<section class="section-project-gallery">
		<div class="container">
			<div class="row project-gallery">
				<?php
				foreach ( $images as $index => $image_id ) :
					$is_full = $odd && $index === $last_index;
					?>
					<div class="<?php echo $is_full ? 'col-12 project-gallery__item--full' : 'col-12 col-md-6 project-gallery__item--half'; ?> project-gallery__item">
						<?php echo wp_get_attachment_image( $image_id, $is_full ? 'single-project-featured-image' : 'single-project-image' ); ?>
					</div>
					<?php
				endforeach;
				?>
			</div>
		</div>
	</section>
	<?php
endif;
