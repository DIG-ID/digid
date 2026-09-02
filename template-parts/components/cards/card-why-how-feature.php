<?php
$why_how_feature_title  = $args['title'];
$why_how_feature_text   = $args['text'];
$why_how_feature_button = $args['button'];
?>
<div class="col-12 col-lg-4 card-service">
	<?php if ( $why_how_feature_button ) : ?>
		<a href="<?php echo esc_url( $why_how_feature_button['url'] ); ?>" target="<?php echo esc_attr( $why_how_feature_button['target'] ? $why_how_feature_button['target'] : '_self' ); ?>" class="card-service__content-link">
	<?php endif; ?>
		<div class="card-service__content">
			<div class="card-service__title"><h3><?php echo esc_html( $why_how_feature_title ); ?></h3></div>
			<p><?php echo esc_html( $why_how_feature_text ); ?></p>
			<hr>
			<?php if ( $why_how_feature_button ) : ?>
				<div class="card-service__btn"><?php echo esc_html( $why_how_feature_button['title'] ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></div>
			<?php endif; ?>
		</div>
	<?php if ( $why_how_feature_button ) : ?>
		</a>
	<?php endif; ?>
</div>
