<section class="section-intro section-intro--dark">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) :
					yoast_breadcrumb( '<nav class="section__title" aria-label="Breadcrumb"><p id="breadcrumbs">', '</p></nav>' );
				endif;
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<h1 class="section__subtitle"><?php the_field( 'case_studies_archive_title', 'option' ); ?></h1>
			</div>
		</div>
	</div>
</section>
