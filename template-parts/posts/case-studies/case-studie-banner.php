<section class="section-banner">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'case-studie-banner' );
				else :
					echo '<img src="https://via.placeholder.com/416x304" alt="placeholder image"></figure>';
				endif;
				?>
			</div>
		</div>
	</div>
</section>
