<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php
		do_action( 'wp_body_open' );
		?>

    <header id="main-header" class="main-header" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar navbar__dark fixed-top navbar-expand-lg" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'digid' ); ?>">
		<div class="container">
			<div class="site-branding">
				<div class="row justify-content-between align-items-center">
					<div class="col">
						<div class="site-logo"><?php get_template_part( 'template-parts/main-logo' ); ?></div>
					</div>
					<div class="col d-none d-lg-flex justify-content-end">
						<?php do_action( 'socials' ); ?>
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
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main',
						'container'      => false,
						'menu_class'     => 'navbar-nav__dark',
						'items_wrap'     => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
						'detph'          => 2,
						'walker'         => new digid_bs5_nav_walker(),
					),
				);
				?>
			</div><!-- .navbar-collapse -->
		</div>
	</nav>
</header>
