<div class="row justify-content-between align-items-center two-columns">
	<div class="col-6">
		<?php
		$group  = get_sub_field( 'two_columns' );
		$images = $group['images'];
		if ( $images ) :
			foreach ( $images as $image_id ) :
				echo wp_get_attachment_image( $image_id, 'full' );
			endforeach;
		endif;
		?>
	</div>
	<div class="col-5">
		<?php echo $group['text']; ?>
	</div>
</div>
