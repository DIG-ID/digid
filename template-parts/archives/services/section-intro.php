<section class="section section-intro">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-sm-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-sm-11">
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
			<div class="col-12 col-lg-10 offset-lg-1">
				<h2 class="section__subtitle"><?php the_field( 'services_archive_title', 'option' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-5 offset-lg-1">
				<p class="section__description"><?php the_field( 'services_archive_description', 'option' ); ?></p>
			</div>
		</div>
	</div>
</section>

