<section id="how" class="section-why-how section-how position-relative">
	<div class="container">
		<div class="row align-items-center py-5">
			<div class="col-3 col-md-1">
				<span class="section__title--line-main-blue"></span>
			</div>
			<div class="col-9 col-md-11">
				<h2 class="section__title"><?php the_field( 'why-how_overtitle_how' ); ?></h2>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-12 col-md-10 offset-lg-1">
				<p class="section__subtitle"><?php the_field( 'why-how_title_how' ); ?></p>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class="col-12 col-lg-6">
				<?php if ( have_rows( 'why-how_features_list' ) ) : ?>
					<div class="row why-how-cards-row pb-5 offset-lg-2">
						<?php while ( have_rows( 'why-how_features_list' ) ) : the_row(); ?>
							<?php
							get_template_part(
								'template-parts/components/cards/card',
								'why-how-feature',
								array(
									'title' => get_sub_field( 'title' ),
									'text'  => get_sub_field( 'text' ),
								)
							);
							?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-5 text-lg-start how__image-col">
				<?php $how_image = get_field( 'how_image' ); ?>
				<?php if ( $how_image ) : ?>
					<img src="<?php echo esc_url( $how_image['url'] ); ?>" alt="<?php echo esc_attr( $how_image['alt'] ); ?>" class="how__image">
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
