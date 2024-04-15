<section class="section section-intro section-intro--dark position-relative">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-md-2 col-lg-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-md-10 col-lg-11">
				<h1 class="section__title">
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) :
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					endif;
					?>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-1">
				<p class="section__subtitle"><?php the_field( 'jobs_archive_title', 'options' ); ?></p>
			</div>
		</div>
	</div>
</section>
