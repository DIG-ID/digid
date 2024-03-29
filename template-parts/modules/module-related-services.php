<section class="section section-services">
	<div class="container">
		<div div class="row align-items-center section__title--wrapper mb-4 mb-lg-0">
			<div class="col-3 col-md-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-md-6">
				<h2 class="section__title"><?php esc_html_e( 'Verwandte Dienstleistungen', 'digid' ); ?></h2>
			</div>
			<div class="col-12 col-md-5 text-end d-none d-lg-block">
				<a class="section__btn" href="<?php echo esc_url( get_post_type_archive_link( 'services' ) ); ?>"><span class="section__btn-text"><?php esc_html_e( 'Zu allen Dienstleistungen', 'digid' ); ?></span> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
		</div>
		<div class="row">
			<?php
			if ( is_singular( 'services' ) ) :
				$pod = pods( 'services', get_the_id() );
			endif;
			$rpods = $pod->field( 'related_services' );
			if ( ! empty( $rpods ) ) :
					$rnames = array();
					foreach ( $rpods as $rpod ) :
						$rpod_id  = $rpod['ID'];
						$rnames[] = get_the_title( $rpod_id );
						?>
						<article id="post-<?php echo $rpod_id ?>" <?php post_class( 'col-12 col-lg-4 card-service' ); ?>>
							<a href="<?php the_permalink( $rpod_id ); ?>" class="card-service__content-link">
								<div class="card-service__content">
									<div class="card-service__title"><h3><?php echo get_the_title( $rpod_id ); ?></h3></div>
									<p><?php echo get_the_excerpt( $rpod_id ); ?></p>
									<hr>
									<div class="card-service__btn"><?php esc_html_e( 'Mehr erfahren', 'digid' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></div>
								</div>
							</a>
						</article>
						<?php
				endforeach;
			endif;
			?>
		</div>
		<div class="row">
			<div class="col-12 d-lg-none mb-4">
				<a class="section__btn" href="<?php echo esc_url( get_post_type_archive_link( 'services' ) ); ?>"><?php esc_html_e( 'Zu allen Dienstleistungen', 'digid' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
		</div>
	</div>
</section>



