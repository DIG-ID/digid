<div class="block__image">
	<?php
	$block_image = get_sub_field( 'image' );
	if ( $block_image ) :
		echo wp_get_attachment_image( $block_image, 'full' );
	else : 
		echo '<img src="https://via.placeholder.com/683x600" alt="placeholder image">';
	endif;
	?>
</div>
