<section class="section section-intro section-intro--dark position-relative">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-md-1 d-none d-sm-block">
				<span class="section__title--line"></span>
			</div>
			<div class="col-12 col-md-11">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) :
					yoast_breadcrumb( '<nav class="section__title" aria-label="Breadcrumb"><p id="breadcrumbs">', '</p></nav>' );
				endif;
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-1">
				<h1 class="section__subtitle"><?php the_field( 'service_intro_title' ); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 offset-lg-1">
				<p class="section__description"><?php the_field( 'service_intro_description' ); ?></p>
			</div>
		</div>
	</div>
	<?php get_template_part( 'template-parts/modules/module', 'start-project' ); ?>
</section>

