<section id="section-form" class="section section-form">
	<div class="container">
		<div div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-md-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-md-11">
				<h2 class="section__title"><?php echo esc_html_e( 'Kontaktieren Sie uns', 'digid' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-12">
				<h2 class="section__subtitle"><?php the_field( 'form_section_title' ); ?></h2>
			</div>
		</div>
		<div class="row justify-content-between align-items-center">
			<div class="col-12 col-lg-8">
				<?php $form_shortcode = get_field( 'form_section_form_shortcode' ); ?>
				<?php echo do_shortcode( $form_shortcode ); ?>
			</div>
			<div class="col-12 col-lg-3 bg-logo">
				<?php get_template_part( 'template-parts/main-logo' ); ?>
			</div>
		</div>
	</div>
</section>
