<?php 
$post_card_classes = 'col-12 col-lg-6 card-job grid-item ' . esc_attr( isset( $args['slug'] ) ? $args['slug'] : '*' );
?>
<article data-category="<?php echo esc_attr( isset( $args['slug'] ) ? $args['slug'] : '*' ); ?>" id="post-<?php the_ID(); ?>" <?php post_class( $post_card_classes ); ?> >
	<a href="<?php the_permalink(); ?>" class="card-service__content-link">
		<div class="card-job__content">
			<div class="card-job__title"><?php the_title( '<h2>', '</h2> '); ?></div>
			<?php the_excerpt(); ?>
			<hr>
			<div class="card-job__btn"><?php esc_html_e( 'Mehr erfahren', 'digid' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></div>
		</div>
	</a>
</article>
