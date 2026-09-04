<section class="section section-why-process">
	<div class="why-process__banner">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 offset-lg-2">
					<div class="row align-items-center">
						<div class="col-12 col-lg-8">
							<p class="why-process__banner-text"><?php the_field( 'why_process_banner_text' ); ?></p>
						</div>
						<div class="col-12 col-lg-4 text-lg-end">
							<?php $why_process_banner_button = get_field( 'why_process_banner_button' ); ?>
							<?php if ( $why_process_banner_button ) : ?>
								<a class="why-process__banner-btn" href="<?php echo esc_url( $why_process_banner_button['url'] ); ?>" target="<?php echo esc_attr( $why_process_banner_button['target'] ? $why_process_banner_button['target'] : '_self' ); ?>"><?php echo esc_html( $why_process_banner_button['title'] ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-5 why-process__col why-process__col--light">
				<div class="row align-items-center section__title--wrapper">
					<div class="col-3">
						<span class="section__title--line"></span>
					</div>
					<div class="col-9">
						<h2 class="section__title"><?php the_field( 'why_process_overtitle' ); ?></h2>
					</div>
				</div>
				<div class="section__description row">
					<div class="col-12 col-lg-9 offset-lg-3">
					<?php the_field( 'why_process_text' ); ?>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-5 why-process__col why-process__col--dark">
				<h2 class="section__subtitle"><?php the_field( 'why_process_title' ); ?></h2>
				<?php if ( have_rows( 'why_process_steps' ) ) : ?>
					<hr class="why-process__steps-divider">
					<div class="row">
						<div class="col-12 col-lg-9 offset-lg-3">
							<div class="why-process__steps">
								<?php $why_process_step_number = 0; ?>
								<?php while ( have_rows( 'why_process_steps' ) ) : the_row(); ?>
									<?php $why_process_step_number++; ?>
									<?php if ( $why_process_step_number > 1 ) : ?>
										<hr>
									<?php endif; ?>
									<div class="why-process__step">
										<p class="why-process__step-title"><?php echo esc_html( $why_process_step_number ); ?>. <?php the_sub_field( 'title' ); ?></p>
										<p class="why-process__step-text"><?php the_sub_field( 'text' ); ?></p>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
