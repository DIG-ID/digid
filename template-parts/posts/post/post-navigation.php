<?php
$prev_post = get_previous_post( 'category' );
$next_post = get_next_post( 'category' );

if ( ! empty( $prev_post ) || ! empty( $next_post ) ) :
	?>
	<section class="section-navigation">
		<div class="container">
			<div class="row">
				<div class="col-6 previous-post">
					<?php
					if ( is_a( $prev_post, 'WP_Post' ) ) :
						?>
						<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="32.4" height="11.9" style="enable-background:new 0 0 32.4 11.9"><path d="M32.4 5.3H2.6L6.9 1 6 0 0 6l6 6 1-1-4.4-4.4h29.8V5.3z" class="st0"/></svg> <?php echo esc_html( $prev_post->post_title ); ?></a>
						<?php
					endif;
					?>
				</div>
				<div class="col-6 text-end next-post">
					<?php
					if ( is_a( $next_post, 'WP_Post' ) ) :
						?>
						<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_html( $next_post->post_title ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;
