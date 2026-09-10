<?php get_template_part( 'template-parts/master-header' ); ?>
<a class="skip-link" href="#main-content">
	<?php esc_html_e( 'Skip to main content', 'digid' ); ?>
</a>
<header id="main-header" class="main-header main-header--chatgptads">
	<nav class="navbar navbar__dark fixed-top" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'digid' ); ?>">
		<div class="container">
			<a class="site-logo" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php get_template_part( 'template-parts/main-logo' ); ?></a>
			<div class="main-header__actions d-flex align-items-center">
				<?php $chatgptads_header_button = get_field( 'header_button' ); ?>
				<?php if ( $chatgptads_header_button ) : ?>
					<a class="main-header__cta" href="<?php echo esc_url( $chatgptads_header_button['url'] ); ?>" target="<?php echo esc_attr( $chatgptads_header_button['target'] ? $chatgptads_header_button['target'] : '_self' ); ?>"><?php echo esc_html( $chatgptads_header_button['title'] ); ?></a>
				<?php endif; ?>
				<?php $chatgptads_languages = apply_filters( 'wpml_active_languages', null, array( 'skip_missing' => 0 ) ); ?>
				<?php if ( $chatgptads_languages ) : ?>
					<ul class="main-header__lang-switcher">
						<?php
						$chatgptads_lang_total = count( $chatgptads_languages );
						$chatgptads_lang_index = 0;
						?>
						<?php foreach ( $chatgptads_languages as $chatgptads_language ) : ?>
							<?php
							$chatgptads_lang_index++;
							$chatgptads_lang_classes = array( 'main-header__lang-item' );
							if ( 1 === $chatgptads_lang_index ) {
								$chatgptads_lang_classes[] = 'main-header__lang-item--first';
							}
							if ( $chatgptads_language['active'] ) {
								$chatgptads_lang_classes[] = 'main-header__lang-item--current';
							}
							?>
							<li class="<?php echo esc_attr( implode( ' ', $chatgptads_lang_classes ) ); ?>">
								<a href="<?php echo esc_url( $chatgptads_language['url'] ); ?>"><?php echo esc_html( strtoupper( $chatgptads_language['language_code'] ) ); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</nav>
</header>
