<section class="section-intro">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
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
			<div class="col-12 col-lg-10 offset-lg-1">
				<?php the_title( '<h1 class="section__subtitle">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</section>
