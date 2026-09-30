<section class="section section-services-list">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-sm-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-sm-11">
				<h2 class="section__title"><?php esc_html_e( 'Unsere Dienstleistungen', 'digid' ); ?></h2>
			</div>
		</div>
		<div class="row services-list">
			<?php get_template_part( 'template-parts/loops/loop', 'services' ); ?>
		</div>
	</div>
</section>
