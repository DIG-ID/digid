<div class="row gallery">
	<?php
	$gallery = get_sub_field( 'gallery' );
	if ( $gallery ) :
		$counter = 0;
		foreach ( $gallery as $image_id ) :
			$counter++;
			switch ( $counter ) :
				case 1:
					echo '<div class="col-12">' . wp_get_attachment_image( $image_id, 'full' ) . '</div>';
					break;
				default:
					echo '<div class="col-6">' . wp_get_attachment_image( $image_id, 'full' ) . '</div>';
					break;
			endswitch;
		endforeach;
	endif;
	?>
</div>
