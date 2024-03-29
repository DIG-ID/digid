<section class="section section-intro section-about-intro position-relative">
	<div class="container-fluid px-0">
		<div class="container about__container">
			<div class="row align-items-center section__title--wrapper">
				<div class="col-3 col-md-1">
					<span class="section__title--line" style="background-color: #00CCCC;"></span>
				</div>
				<div class="col-9 col-md-11">
					<h2 class="section__title">
						<?php
						if ( function_exists( 'yoast_breadcrumb' ) ) :
							yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
						endif;
						?>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-10 offset-lg-1">
					<h1 class="section__subtitle"><?php the_field( 'intro_title' ) ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-5 offset-lg-1">
					<p class="section__description"><?php the_field( 'intro_description' ) ?></p>
					<?php get_template_part( 'template-parts/modules/module', 'start-project' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

