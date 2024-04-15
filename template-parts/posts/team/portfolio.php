<?php
if ( get_field( 'use_portfolio' ) ) :
	if ( have_rows( 'portfolio' ) ) :
		?>
		<section class="section section-team-title">
			<div class="container">
				<div class="row">
					<h3 class="team-portofolio-title"><?php esc_html_e( 'Portfolio', 'digid' ); ?></h3>
				</div>
			</div>
		</section>
		<section class="section-filter section-filter--team-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="button-group filter-button-group portfolio-filter-button-group">
							<button class="button is-checked" data-filter="*"><?php esc_html_e( 'Alle', 'digid' ); ?></button>
							<?php
							while ( have_rows( 'portfolio' ) ) :
								the_row();
								$portfolio_cat      = get_sub_field( 'categorie' );
								$portfolio_cat_slug = strtolower( $portfolio_cat );
								$portfolio_cat_slug = str_replace( ' ', '-', $portfolio_cat_slug );
								$portfolio_gallery  = get_sub_field( 'gallery' );
								if ( ! empty( $portfolio_gallery ) ) :
									echo '<button class="button" data-filter=".' . esc_attr( $portfolio_cat_slug ) . '">' . esc_html( $portfolio_cat ) . '</button>';
								endif;
							endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	endif;
	if ( have_rows( 'portfolio' ) ) :
		?>
		<section class="section-team-portfolio">
			<div class="container">
				<div class="row grid-portfolio">
					<div class="grid-sizer col-12 col-lg-4"></div>
					<?php
					while ( have_rows( 'portfolio' ) ) :
						the_row();
						$portfolio_cat      = get_sub_field( 'categorie' );
						$portfolio_cat_slug = strtolower( $portfolio_cat );
						$portfolio_cat_slug = str_replace( ' ', '-', $portfolio_cat_slug );
						$portfolio_gallery  = get_sub_field( 'gallery' );
						if ( $portfolio_gallery ) :
							foreach ( $portfolio_gallery as $gallery_id ) :
								$classes = 'col-12 col-lg-4 card-portfolio grid-item overflow-hidden ' . esc_attr( isset( $portfolio_cat_slug ) ? $portfolio_cat_slug : '*' );
								?>
								<a href="<?php echo esc_url( wp_get_attachment_image_url( $gallery_id, 'full' ) ); ?>" data-fancybox="<?php echo esc_attr( isset( $portfolio_cat_slug ) ? $portfolio_cat_slug : '*' ); ?>" data-category="<?php echo esc_attr( isset( $portfolio_cat_slug ) ? $portfolio_cat_slug : '*' ); ?>" class="<?php echo esc_attr( $classes ); ?>">
									<?php echo wp_get_attachment_image( $gallery_id, 'card-post-thumbnail', false, array( 'class' => 'object-fit-cover' ) ); ?>
								</a>
								<?php
							endforeach;
						endif;
					endwhile;
					?>
				</div>
			</div>
		</section>
		<?php
	else :
		echo '<p>' . esc_html__( 'Dem Portfolio wurden keine Artikel hinzugefügt', 'digid' ) . '</p>';
	endif;
endif;
