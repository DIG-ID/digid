<section class="section-featured-image">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'single-project-featured-image' );
				else:
					echo '<figure><img src="https://via.placeholder.com/1080x720" alt="placeholder image"></figure>';
				endif;
				?>
			</div>
		</div>
	</div>
</section>
