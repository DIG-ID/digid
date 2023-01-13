<section class="section section-form">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12">
				<h2 class="section__subtitle">
					<?php
					echo sprintf(
						'%1$s<br>%2$s',
						esc_html__( 'Want to work with us?', 'digid' ),
						esc_html__( 'Insert text', 'digid' )
					);
					?>
				</h2>
			</div>
		</div>
		<div class="row justify-content-between align-items-center">
			<div class="col-12 col-lg-8">
				<?php $form_shortcode = get_field( 'form_shortcode' ); ?>
				<?php echo do_shortcode( $form_shortcode ); ?>
			</div>
			<div class="col-12 col-lg-3 bg-logo">
				<?php get_template_part( 'template-parts/main-logo' ); ?>
			</div>
		</div>
	</div>
</section>
