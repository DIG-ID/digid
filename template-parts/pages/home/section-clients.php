<section class="section section-clients">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-md-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-md-11">
				<h2 class="section__title"><?php esc_html_e( 'REFERENZEN', 'digid' ); ?></h2>
			</div>
            <div class="col-9 col-md-11">
				<p class="section__subtitle"><?php the_field( 'clients_title' ); ?></p>
			</div>
		</div>

	<?php
	$client_logos = get_field( 'clients_logos' );
	if ( $client_logos ) :
		?>
		<div class="row pt-10">
			<div class="col-12">
				<div class="swiper clients-logos-swiper">
					<div class="swiper-wrapper">
						<?php
						foreach ( $client_logos as $logo ) :
							$logo_id = is_array( $logo ) ? $logo['ID'] : $logo;
							?>
							<div class="swiper-slide clients-logos__slide">
								<?php
								echo wp_get_attachment_image(
									$logo_id,
									'full',
									false,
									array(
										'class'   => 'clients-logos__img',
										'loading' => 'lazy',
									)
								);
								?>
							</div>
						<?php endforeach; ?>
					</div>
				</div><!-- .clients-logos-swiper -->
			</div>
		</div>
    </div>
	<?php endif; ?>
</section>
