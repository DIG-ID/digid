<?php
/**
 * Modular project content built in the block editor (columns, images, text).
 */
if ( get_the_content() ) :
	?>
	<section class="section-project-blocks">
		<div class="container">
			<div class="project-blocks">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	<?php
endif;
