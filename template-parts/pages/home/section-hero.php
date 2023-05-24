<section class="section section-hero">
	<div class="container">
		<div class="row section-hero__row ">
			<div class="col-12">
				<h2 class="section-hero__title">
					<span class="text">forward<br></span>
					<span class="text">thinking<br></span>
					<span class="text">marketing<br></span>
					<span class="text">solutions</span>
					<!-- <span class="cursor">|</span> -->
				</h2>
			</div>
		</div>
		<?php get_template_part( 'template-parts/modules/module', 'start-project' ); ?>
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-sm-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-sm-11">
				<h2 class="section__title"><?php the_field( 'intro_section_title' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-5 offset-lg-1 position-relative">
				<p class="section__subtitle"><?php the_field( 'intro_section_subtitle' ); ?></p>
				<div class="section__description">
					<?php the_field( 'intro_section_description' ); ?>
				</div>
				<a class="section__btn" href="<?php echo esc_url( get_field( 'intro_section_button_url' ) ); ?>"><span class="section__btn-text"><?php the_field( 'intro_section_button_text' ); ?></span> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
			<div class="col-12 col-lg-5 text-end luxy-el" data-speed-y="5", data-offset="-50">
				<?php
				//$image = get_field( 'intro_section_image' );
				/*if ( $image ) :
					echo wp_get_attachment_image( $image, 'home-intro-image', false, array( 'class' => 'luxy-el', 'data-speed-y' => '5', 'data-offset' => '-50' ) );
				else :
					echo '<img src="https://via.placeholder.com/405x500" alt="">';
				endif;*/
				?>
				<?php $slider = get_field( 'intro_section_slider' ); ?>
				<?php if ( $slider ) : ?>
					<div class="swiper swiper-home-intro">
						<div class="swiper-wrapper swiper-wrapper-home-intro">
							<?php foreach ( $slider as $slider_id ) : ?>
								<figure class="swiper-slide swiper-slide-home-intro mb-0">
									<?php echo wp_get_attachment_image( $slider_id, 'home-intro-image' ); ?>
								</figure>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>