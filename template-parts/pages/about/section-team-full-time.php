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
			<?php if( get_field( 'title_team' ) ) : ?>
			<div class="row py-3">
				<h2 class="section__subtitle"><?php the_field( 'title_team' ); ?></h2>
			</div>
			<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<?php
			$team_full_posts = get_field( 'team_members_full-time' );
			if ( $team_full_posts ) :
				foreach ( $team_full_posts as $team_full_post ) :
					//var_dump($team_full_post);
					$member_id       = $team_full_post->ID;
					$member_name     = get_field( 'name', $member_id );
					$member_position = get_field( 'position', $member_id );
					?>
					<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-5 team-card">
						<?php
						if ( has_post_thumbnail( $member_id ) ) :
							echo get_the_post_thumbnail( $member_id, 'team-photo-image' );
						else :
							echo '<figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/avatar-default.png" alt="placeholder image"></figure>';
						endif;
						?>
						<p class="team__name"><?php echo esc_html( $member_name ); ?></p>
						<p class="team__position"><?php echo esc_html( $member_position ); ?></p>
					</div>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>