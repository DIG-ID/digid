<section class="section section-services">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h2 class="section__title"><?php the_field( 'services_section_title' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-11 offset-lg-1">
				<p class="section__subtitle"><?php the_field( 'services_section_subtitle' ); ?></p>
			</div>
		</div>
		<div class="row">
			<?php get_template_part( 'template-parts/loops/loop', 'services' ); ?>
		</div>
	</div>
</section>
