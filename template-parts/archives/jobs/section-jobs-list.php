<section class="section section-jobs">
	<div class="container">
		<div class="row">
			<div class="col-12 col-xl-4">
				<p class="d-none d-lg-block"><?php esc_html_e( 'Nach Position filtern:', 'digid' ); ?></p>
				<div class="job-button-group job-filters-button-group">
					<button class="button is-checked" data-filter="*"><?php esc_html_e( 'Alle', 'digid' ); ?></button>
					<?php
					$job_positions = get_terms(
						array(
							'taxonomy'   => 'job_position',
							'hide_empty' => true,
						)
					);
					foreach ( $job_positions as $job_position ) :
						echo '<button class="button" data-filter=".' . esc_attr( $job_position->slug ) . '">' . esc_html( $job_position->name ) . '</button>';
					endforeach
					?>
				</div>
			</div>
			<div class="col-12 col-xl-8">
				<div class="row row-flex grid-jobs">
					<?php get_template_part( 'template-parts/loops/loop', 'jobs' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
