<section class="section-intro">
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
	</div>
</section>
