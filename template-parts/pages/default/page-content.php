<section class="section-content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 page-content">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'single-featured-image' );
				endif;
				the_content();
				?>
			</div>
		</div>
	</div>
</section>
