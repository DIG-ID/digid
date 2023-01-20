<section class="section-filter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="button-group filter-button-group">
					<button class="button is-checked" data-filter="*"><?php esc_html_e( 'All', 'digid' ); ?></button>
					<?php
					$a = array(
						'taxonomy'   => 'category',
						'hide_empty' => 0,
						'exclude'    => array( 1 ),
					);
					$c = get_terms( $a );
					foreach ( $c as $c_id ) :
						$cname = $c_id->name;
						$cslug = $c_id->slug;
						echo '<button class="button" data-filter=".' . esc_attr( $cslug )  . '">' . esc_html( $cname ) . '</button>';
					endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
