<section class="section-intro">
	<div class="container">
		<div div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<div class="section__title">
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) :
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					endif;
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-8">
				<h1 class="section__subtitle"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
