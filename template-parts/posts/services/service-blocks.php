<section class="section section-blocks">
	<?php
	if ( have_rows( 'blocks' ) ) :
		while ( have_rows( 'blocks' ) ) :
			the_row();
			$sub_value = get_sub_field( 'title' );
			echo $sub_value;
		endwhile;
	endif;
	?>
</section>
