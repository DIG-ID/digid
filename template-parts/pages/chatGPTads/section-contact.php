<section id="sign-up" class="section section-chatgptads-contact">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-4">
				<h2 class="section__subtitle"><?php the_field( 'contact_title' ); ?></h2>
				<div class="section__description">
					<?php the_field( 'contact_text' ); ?>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<?php $contact_form_shortcode = get_field( 'contact_form_shortcode' ); ?>
				<?php if ( $contact_form_shortcode ) : ?>
					<?php echo do_shortcode( $contact_form_shortcode ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
