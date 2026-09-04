<?php get_template_part( 'template-parts/master-header' ); ?>
<a class="skip-link" href="#main-content">
	<?php esc_html_e( 'Skip to main content', 'digid' ); ?>
</a>
<header id="main-header" class="main-header main-header--chatgptads">
	<nav class="navbar navbar__dark fixed-top" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'digid' ); ?>">
		<div class="container">
			<a class="site-logo" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php get_template_part( 'template-parts/main-logo' ); ?></a>
			<?php $chatgptads_header_button = get_field( 'header_button' ); ?>
			<?php if ( $chatgptads_header_button ) : ?>
				<a class="main-header__cta" href="<?php echo esc_url( $chatgptads_header_button['url'] ); ?>" target="<?php echo esc_attr( $chatgptads_header_button['target'] ? $chatgptads_header_button['target'] : '_self' ); ?>"><?php echo esc_html( $chatgptads_header_button['title'] ); ?></a>
			<?php endif; ?>
		</div>
	</nav>
</header>
