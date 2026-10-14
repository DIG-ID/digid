<?php if ( has_post_thumbnail() ) : ?>
	<section class="section-featured-image">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_post_thumbnail( 'single-project-featured-image' ); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
