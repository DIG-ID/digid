<section class="section-intro">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-sm-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-sm-11">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) :
					yoast_breadcrumb( '<nav class="section__title" aria-label="Breadcrumb"><p id="breadcrumbs">', '</p></nav>' );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
