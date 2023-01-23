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
			<nav class="navbar fixed-top navbar-expand-lg" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'digid' ); ?>">
				<div class="container">
					<?php get_template_part( 'template-parts/main', 'header' ); ?>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main',
								'container'      => false,
								'menu_class'     => '',
								'items_wrap'     => '<ul id="%1$s" class="navbar-nav align-items-center %2$s">%3$s</ul>',
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
