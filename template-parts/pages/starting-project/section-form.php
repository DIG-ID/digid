<section class="section section-st-project section-form min-vh-100">
	<div class="container container-starting-project">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-lg-7 st__col">
				<h1 class="section__subtitle"><?php the_field( 'form_title' ) ?></h1>
			</div>
			<div class="col-12">
				<?php echo do_shortcode( get_post_meta( get_the_id(), 'form_shortcode', true ) ); ?>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-12 text-center">
				<a class="section-st-project--option-link" href="<?php echo esc_url( get_home_url() ); ?>#section-form"><span class="section-st-project--option-link-text"><?php esc_html_e( 'Ich möchte nur eine Botschaft senden.', 'digid' ); ?></span> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914" aria-hidden="true"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
		</div>
	</div>
</section>