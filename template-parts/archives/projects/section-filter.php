<section class="section-filter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="button-group filter-button-group">
					<button class="button is-checked" data-filter="*"><?php esc_html_e( 'Alle', 'digid' ); ?></button>
					<?php
					$services = pods( 'services' );
					$services->find(
						array(
							'where' => array(
								array(
									'key'     => 'related_projects',
									'compare' => '!=',
									'value'   => '',
								),
							),
						)
					);
					// Loop through the services
					if ( $services->total() > 0 ) :
						while ( $services->fetch() ) :
							$ptitle = $services->field( 'post_title' );
							$pslug  = $services->field( 'post_name' );
							echo '<button class="button" data-filter=".' . esc_attr( $pslug )  . '">' . esc_html( $ptitle ) . '</button>';
						endwhile;
					endif;
				?>
				</div>
			</div>
		</div>
	</div>
</section>
