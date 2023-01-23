<div class="row image-block">
	<div class="col-12">
		<?php
		$img_fw = get_sub_field( 'image_full_width' );
		if ( $img_fw ) :
			echo wp_get_attachment_image( $img_fw, 'full' );
		endif;
		?>
	</div>
</div>
