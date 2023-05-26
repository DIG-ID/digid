<?php get_template_part( 'template-parts/master-header' ); ?>
<header id="main-header" class="main-header" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar navbar__dark fixed-top navbar-expand-lg" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'digid' ); ?>">
		<div class="container">
			<?php get_template_part( 'template-parts/main', 'header' ); ?>
			<div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main',
						'container'      => false,
						'menu_class'     => 'navbar-nav__dark',
						'items_wrap'     => '<ul id="%1$s" class="navbar-nav align-items-center %2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
						'detph'          => 2,
						'walker'         => new digid_bs5_nav_walker(),
					),
				);
				?>
				<?php do_action( 'wpml_add_language_selector' ); ?>
			</div><!-- .navbar-collapse -->
		</div>
	</nav>
</header>