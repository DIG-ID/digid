<div class="site-branding">
	<div class="row justify-content-between align-items-center">
		<div class="col">
			<a class="site-logo" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php get_template_part( 'template-parts/main-logo' ); ?></a>
		</div>
		<div class="col d-none d-lg-flex justify-content-end">
			<?php //do_action( 'socials' ); ?>
		</div>
		<div class="col d-flex justify-content-end d-lg-none">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</div>
</div><!-- .site-branding -->
<div class="navbar-actions">
	<?php do_action( 'wpml_add_language_selector' ); ?>
	<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
		<span class="icon-left"></span>
		<span class="icon-right"></span>
	</button>
</div><!-- .navbar-actions -->