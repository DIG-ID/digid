<section class="section-content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 project-description">
				<p class="project-description__label"><?php esc_html_e( 'Beschreibung', 'digid' ); ?></p>
				<?php
				$description = get_field( 'project_description' );
				if ( $description ) :
					?>
					<div class="project-description__text"><?php echo wp_kses_post( $description ); ?></div>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-5 offset-lg-1">
				<div class="project-details">
					<?php // Visually hidden: keeps the H2 in the heading outline (SEO) without showing it. ?>
					<h2 class="visually-hidden">
						<?php
						/* translators: %s: project title */
						printf( esc_html__( 'Projektumfang: %s', 'digid' ), esc_html( get_the_title() ) );
						?>
					</h2>
					<dl class="project-details__grid">
						<?php
						$client = get_field( 'project_scope_client' );
						if ( $client ) :
							?>
							<div class="project-details__item">
								<dt class="project-details__label"><?php esc_html_e( 'Kunde', 'digid' ); ?></dt>
								<dd class="project-details__value"><?php echo esc_html( $client ); ?></dd>
							</div>
						<?php endif; ?>

						<?php
						$website = get_field( 'project_scope_website' );
						if ( $website ) :
							?>
							<div class="project-details__item">
								<dt class="project-details__label"><?php esc_html_e( 'Webseite', 'digid' ); ?></dt>
								<dd class="project-details__value"><a href="<?php echo esc_url( $website ); ?>" target="_blank" rel="noopener"><?php echo esc_html( preg_replace( '#^https?://#', '', untrailingslashit( $website ) ) ); ?></a></dd>
							</div>
						<?php endif; ?>

						<div class="project-details__item">
							<dt class="project-details__label"><?php esc_html_e( 'Erbrachte Leistungen', 'digid' ); ?></dt>
							<dd class="project-details__value"><?php get_template_part( 'template-parts/loops/loop', 'related-services-link' ); ?></dd>
						</div>

						<?php
						$sector = get_field( 'project_scope_sector' );
						if ( $sector ) :
							?>
							<div class="project-details__item">
								<dt class="project-details__label"><?php esc_html_e( 'Branche', 'digid' ); ?></dt>
								<dd class="project-details__value"><?php echo esc_html( $sector ); ?></dd>
							</div>
						<?php endif; ?>

						<?php
						/*
						 * Date: hidden in the new design, kept here in case it comes back.
						 *
						$date = get_field( 'project_scope_date' );
						if ( $date ) :
							$datetime = new DateTime( $date );
							$format   = 'de' === apply_filters( 'wpml_current_language', null ) ? 'j. F Y' : 'F j, Y';
							?>
							<div class="project-details__item">
								<dt class="project-details__label"><?php esc_html_e( 'Datum', 'digid' ); ?></dt>
								<dd class="project-details__value"><?php echo esc_html( date_i18n( $format, $datetime->getTimestamp() ) ); ?></dd>
							</div>
							<?php
						endif;
						*/
						?>
					</dl>
				</div>
			</div>
		</div>
	</div>
</section>
