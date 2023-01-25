<section class="section-content">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-4">
				<div class="project-details">
					<h2><?php esc_html_e( 'Project scope', 'digid' ); ?></h2>
					<?php
					$client = get_field( 'project_scope_client' );
					if ( $client ) :
						echo '<h3>' . esc_html_e( 'Client', 'digid' ) . '</h3>';
						echo '<p>' . $client . '</p>';
					endif;

					$website = get_field( 'project_scope_website' );
					if ( $website ) :
						echo '<h3>' . esc_html_e( 'Website', 'digid' ) . '</h3>';
						echo '<p><a href="' . esc_url( $website ) . '" target="_blank">' . $website . '</a></p>';
					endif;

					$sector = get_field( 'project_scope_sector' );
					if ( $sector ) :
						echo '<h3>' . esc_html_e( 'Sector', 'digid' ) . '</h3>';
						echo '<p>' . $sector . '</p>';
					endif;

					$date = get_field( 'project_scope_date' );
					if ( $date ) :
						echo '<h3>' . esc_html_e( 'Date', 'digid' ) . '</h3>';
						echo '<p>' . $date . '</p>';
					endif;
					?>

					<h3><?php esc_html_e( 'Services', 'digid' ); ?></h3>
					<?php get_template_part( 'template-parts/loops/loop', 'related-services-link' ); ?>
					<span class="line"></span>
				</div>
				<div class="project-description">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<?php
				$images = get_field( 'project_gallery' );
				if ( $images ) :
					foreach ( $images as $image_id ) :
						echo wp_get_attachment_image( $image_id, 'single-project-image' );
					endforeach;
				endif;
				?>
			</div>
		</div>
	</div>
</section>
