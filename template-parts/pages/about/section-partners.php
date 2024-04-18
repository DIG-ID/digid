<?php
if ( have_rows( 'partners' ) ) :
	?>
	<section class="section section-partners">
		<div class="container">
			<div class="row align-items-center py-5">
				<div class="col-3 col-md-1">
					<span class="section__title--line"></span>
				</div>
				<div class="col-9 col-md-11">
					<h2 class="section__title"><?php echo esc_html_e( 'Partners', 'digid' ); ?></h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				while ( have_rows( 'partners' ) ) :
					the_row();
					?>
					<div class="partner-item col-12">
						<div class="row">
							<div class="col-4 col-md-3 text-center">
								<a href="<?php echo esc_url( get_sub_field( 'link' ) ); ?>" target="_blank" rel="noopener noreferrer">
									<?php
									$partner_logo = get_sub_field( 'logo' );
									if ( $partner_logo ) :
										echo wp_get_attachment_image( $partner_logo, 'full' );
									endif;
									?>
								</a>
							</div>
							<div class="col-1"></div>
							<div class="col-6 col-md-4">
								<p class="partner-description"><?php the_sub_field( 'description' ); ?></p>
							</div>
						</div>
					</div>
					<?php
				endwhile;
				?>
			</div>
		</div>
	</section>
	<?php
endif;
