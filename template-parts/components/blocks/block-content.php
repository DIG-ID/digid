<div class="block__content">
	<div class="row align-items-center block__title--wrapper">
			<div class="col-1"><span class="block__line"></span></div>
			<div class="col-11 col-lg-11">
				<h2 class="block__title"><?php the_sub_field( 'title' ); ?></h2>
			</div>
	</div>
	<div class="col-12 col-lg-8 offset-1">
		<p class="block__subtitle"><?php the_sub_field( 'subtitle' ); ?></p>
		<p class="block__description"><?php the_sub_field( 'description' ); ?></p>
		<?php
		if ( get_sub_field('link_to_subpage') ) : ?>
		<a class="section__btn section__btn-blocks" href="<?php echo esc_url( get_sub_field( 'link_to_subpage' ) ); ?>"><?php echo esc_html('Mehr erfahren', 'digid'); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
		<?php endif;
		?>
	</div>
</div>
