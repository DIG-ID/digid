<section class="section section-about-team position-relative">
	<div class="container">
		<div class="row pb-5">
			<div class="col-12 col-lg-5 offset-lg-1 p-lg-0">
				<p class="section__description-team"><?php the_field( 'team_intro_left' ); ?></p>
			</div>
			<div class="col-12 col-lg-5 offset-lg-1 p-lg-0">
				<p class="section__description-team"><?php the_field( 'team_intro_right' ); ?></p>
			</div>
		</div>
			<div class="row align-items-center py-5">
				<div class="col-3 col-md-1">
					<span class="section__title--line"></span>
				</div>
				<div class="col-9 col-md-11">
					<h2 class="section__title"><?php echo esc_html_e( 'Team', 'digid' ); ?></h2>
				</div>
			</div>
			<div class="row py-3">
				<h2 class="section__subtitle"><?php the_field( 'title_team' ); ?></h2>
			</div>
	</div>
	<div class="container">
		<div class="row">
			<?php
			if ( have_rows( 'team_members_repeater' ) ) :
				while ( have_rows( 'team_members_repeater' ) ) :
					the_row();
					?>
					<div class="col-6 col-md-6 col-lg-4 col-xl-3 mb-5 team-card">
						<?php
						$image = get_sub_field( 'photo' );
						if ( $image ) :
							echo wp_get_attachment_image( $image, 'team-photo-image' );
						else :
							echo '<figure><img src="' . get_template_directory_uri() . '/assets/images/avatar-default.png" alt="placeholder image"></figure>';
						endif;
						?>
						<p class="team__name"><?php the_sub_field( 'name' ); ?></p>
						<p class="team__position"><?php the_sub_field( 'position' ); ?></p>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>