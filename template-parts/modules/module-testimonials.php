<section class="section section-testimonials">
	<div class="container">
		<div div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h2 class="section__title">Testimonials</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-11 offset-lg-1">
				<div class="swiper testimonials-swiper">
					<div class="swiper-wrapper">
						<?php get_template_part( 'template-parts/loops/loop', 'testimonials' ); ?>
					</div>
					<div class="swiper-arrows">
						<div class="swiper-arrow-prev"><svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M0 6.641h29.82l-4.305 4.305.967.967 5.957-5.957L26.482 0l-.967.967 4.305 4.306H0Z" transform="rotate(180 16.22 5.957)"/></svg></div>
						<div class="swiper-arrow-next"><svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></div>
					</div>
				</div><!-- .swiper -->
			</div>
		</div>
	</div>
</section>
