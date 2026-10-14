<?php
/**
 * Alternating text + image rows (ACF repeater "project_text_image", field group "Project CPT CF").
 * Odd rows: text left, image right. Even rows: image left, text right.
 * The text is optional; the image keeps its side either way.
 */
if ( have_rows( 'project_text_image' ) ) :
	?>
	<section class="section-project-text-image">
		<div class="container">
			<?php
			$row_index = 0;
			while ( have_rows( 'project_text_image' ) ) :
				the_row();
				$text  = get_sub_field( 'text' );
				$image = get_sub_field( 'image' );
				// Accept any ACF image return format (array, ID or URL).
				if ( is_array( $image ) ) :
					$image_id = $image['ID'];
				elseif ( is_numeric( $image ) ) :
					$image_id = (int) $image;
				else :
					$image_id = $image ? attachment_url_to_postid( $image ) : 0;
				endif;
				$reversed = 1 === $row_index % 2;
				++$row_index;
				?>
				<div class="row align-items-center project-text-image <?php echo $reversed ? 'project-text-image--reversed flex-row-reverse' : ''; ?>">
					<div class="col-12 col-md-6">
						<?php if ( $text ) : ?>
							<div class="project-text-image__text"><?php echo wp_kses_post( $text ); ?></div>
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-6">
						<?php
						if ( $image_id ) :
							echo wp_get_attachment_image( $image_id, 'single-project-image', false, array( 'class' => 'project-text-image__img' ) );
						endif;
						?>
					</div>
				</div>
				<?php
			endwhile;
			?>
		</div>
	</section>
	<?php
endif;
