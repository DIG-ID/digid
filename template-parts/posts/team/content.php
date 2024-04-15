<section class="section section-team-member">
	<div class="container">
		<div class="row align-items-center py-5">
			<div class="col-3 col-md-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-md-11">
				<h2 class="section__title"><?php echo esc_html_e( 'Freelancers', 'digid' ); ?></h2>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-5">
				<div class="team-card">
					<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail( 'team-photo-image' );
					else :
						echo '<figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/avatar-default.png" alt="placeholder image"></figure>';
					endif;
					?>
					<h1 class="team-card__name"><?php the_field( 'name' ); ?></h1>
					<p class="team-card__position"><?php the_field( 'position' ); ?></p>
				</div>
			</div>
			<div class="col-xl-4 section-team-member--description">
				<?php the_content(); ?>
			</div>
			<div class="col-xl-3">
				<!-- <h3 class="section-team-member--external-links-title"><?php esc_html_e( 'Portfolio', 'digid' ); ?></h3> -->
				<?php /*
				if ( have_rows( 'links' ) ) :
					echo '<ul class="section-team-member--external-links">';
					while ( have_rows( 'links' ) ) :
						the_row();
						$ext_links = get_sub_field( 'link' );
						if ( $ext_links ) :
							$link_url    = $ext_links['url'];
							$link_title  = $ext_links['title'];
							$link_target = $ext_links['target'] ? $ext_links['target'] : '_self';
							?>
							<li>
								<a class="section-team-member--external-link href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<?php echo esc_html( $link_title ); ?>
									<svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914" viewBox="0 0 32.439 11.914"><defs></defs><path fill="#0cc" d="M1,22.934H30.82L26.515,27.24l.967.967,5.957-5.957-5.957-5.957-.967.967,4.305,4.305H1Z" transform="translate(-1 -16.293)"/></svg>
								</a>
							</li>
							<?php
						endif;
					endwhile;
					echo '</ul>';
				endif;
				*/ ?>
			</div>
		</div>
	</div>
</section>
