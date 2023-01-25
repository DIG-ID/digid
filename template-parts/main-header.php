<div class="site-branding">
	<div class="row justify-content-between align-items-center">
		<div class="col">
			<a class="site-logo" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php get_template_part( 'template-parts/main-logo' ); ?></a>
		</div>
		<div class="col d-none d-lg-flex justify-content-end">
			<?php //do_action( 'socials' ); ?>
		</div>
	</div>
</div><!-- .site-branding -->
<div class="navbar-actions">
	<?php do_action( 'wpml_add_language_selector' ); ?>
	<button class="navbar-toggler hamburguer-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
	</button>
</div><!-- .navbar-actions -->
