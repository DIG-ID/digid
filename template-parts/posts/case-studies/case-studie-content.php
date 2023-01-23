<section class="section-content">
	<div class="container">
		<?php
		if ( have_rows( 'template_blocks' ) ) :
			while ( have_rows( 'template_blocks' ) ) :
				the_row();
				$layout = get_sub_field( 'block_layout' );
				var_dump($layout);
				get_template_part( 'template-parts/posts/case-studies/layouts/' . $layout );
			endwhile;
		endif;
		?>
	</div>
</section>
