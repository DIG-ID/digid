<footer class="main-footer">
	<div class="footer-content">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md-12 col-lg-5 col-xl-5 footer-left d-flex flex-column">
					<?php get_template_part( 'template-parts/main-logo' ); ?>
					<h4 class="footer-title"><?php echo esc_html_e('Besuchen Sie uns', 'digid'); ?></h4>
					<div class="address">
						<div class="address__ch">
							<p class="address__title">Switzerland</p>
							<p>Grellingerstrasse 35,<br>
							4052 Basel</p>
						</div>
						<div class="addresss__pt">
							<p class="address__title">Portugal</p>
							<p>Rua Avenida 39	<br>
							4425 Porto</p>
						</div>
					</div><!--  .address -->
					<h4 class="footer-title"><?php echo esc_html_e('Folgen Sie uns', 'digid'); ?></h4>
					<?php do_action( 'socials' ); ?>
					<div class="footer-left-bottom">
						<p class="copyright">
							<?php
							$y = date( 'Y' );
							printf(
								esc_html__( 'Copyright &copy; %d dig.id', 'digid' ),
								esc_html( $y ),
							);
							?>
						</p>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_class'     => 'footer-nav',
								'fallback_cb'    => false,
							),
						);
						?>
					</div>
				</div><!--  .footer-left -->
				<div class="col-12 col-md-12 col-lg-5 footer-right d-flex flex-column">
					<h4 class="footer-title"><?php echo esc_html_e('Unser Newsletter', 'digid'); ?></h4>
					<p></p>

					<h4 class="footer-title"><?php echo esc_html_e('Kontaktieren Sie uns', 'digid'); ?></h4>
					<div class="contacts">
						<a href="mailto:hello@dig.id">hello@dig.id</a>
						<a href="tel:+41613732020">+41 61 373 20 20</a>
					</div>

				</div><!--  .footer-right -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .footer-content -->
</footer><!-- .main-footer -->
