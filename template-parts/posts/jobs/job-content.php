<section class="section section-job-content">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-xl-7">
				<?php the_title( '<h1 class="job-title">', '</h1>' ) ?>
				<p class="job-subtitle"><?php the_field( 'subtitle' ); ?></p>
				<?php the_content(); ?>
			</div>
			<div class="col-12 col-xl-4 job-sidebar">
				<?php
				$current_job_id    = get_the_ID();
				$current_job_terms = wp_get_post_terms( $current_job_id, 'job_position', array( 'fields' => 'ids' ) );

				$related_args = array(
					'post_type'    => 'job',
					'post_status'  => 'publish',
					'post__not_in' => array( $current_job_id ),
					'tax_query'    => array(
						array(
							'taxonomy' => 'job_position',
							'field'    => 'term_id',
							'terms'    => $current_job_terms ? $current_job_terms : '',
							'operator' => 'IN',
						),
					),
				);

				$related_jobs_query = new WP_Query( $related_args );
				if ( $related_jobs_query->have_posts() ) :
					echo '<h3 class="job-sidebar__title">' . esc_html__( 'Related jobs', 'digid' ) . '</h3>';
					echo '<ul class="related-jobs">';
					while ( $related_jobs_query->have_posts() ) :
						$related_jobs_query->the_post();
						echo '<li><a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a></li>';
					endwhile;
					echo '</ul>';
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
</section>
