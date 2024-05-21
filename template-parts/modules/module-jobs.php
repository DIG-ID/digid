<?php
$btn_url = get_theme_mod( 'jobs_project' );
if ( $btn_url ) :
	?>
	<section class="section section-call-to-action section-call-to-action--jobs">
		<div class="container">
			<div class="row justify-content-between align-item-center">
				<div class="col col-lg-8 text-center text-lg-start">
					<p><?php esc_html_e( 'Wir vergrössern das dig.id Team!','digid' ); ?></p>
				</div>
				<div class="col col-lg-4 text-center text-end">
					<a class="" href="<?php echo esc_url( $btn_url ); ?>"><?php esc_html_e( 'Jobangebote ansehen','digid' ); ?></a>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;
