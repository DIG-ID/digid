<section class="section-filter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="button-group filter-button-group">
					<button class="button is-checked" data-filter="*"><?php esc_html_e( 'All', 'digid' ); ?></button>
					<?php
					$args = array(
						'post_type'   => 'services',
						'post_status' => 'publish',
					);
					$tquery = new WP_Query( $args );

					if ( $tquery->have_posts() ) :
						while ( $tquery->have_posts() ) :
							$tquery->the_post();
							$ptitle = get_the_title();
							$pslug  = get_post_field( 'post_name', get_the_ID() );
							echo '<button class="button" data-filter=".' . esc_attr( $pslug )  . '">' . esc_html( $ptitle ) . '</button>';
						endwhile;
						wp_reset_postdata();
					endif;
				?>
				</div>
			</div>
		</div>
	</div>
</section>
