<section class="section section-intro section-intro--dark">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
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
			<div class="col-12 col-lg-8 offset-lg-1">
				<p class="section__subtitle"><?php the_field( 'service_intro_title' ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 offset-lg-1">
				<p class="section__description"><?php the_field( 'service_intro_description' ); ?></p>
			</div>
		</div>
	</div>
</section>
