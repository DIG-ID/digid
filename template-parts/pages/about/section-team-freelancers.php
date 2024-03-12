<section class="section section-about-team section-about-team--freelancers position-relative">
	<div class="container">
			<div class="row align-items-center py-5">
				<div class="col-3 col-md-1">
					<span class="section__title--line"></span>
				</div>
				<div class="col-9 col-md-11">
					<h2 class="section__title"><?php echo esc_html_e( 'Freelancers', 'digid' ); ?></h2>
				</div>
			</div>
			<?php if ( get_field( 'title_team' ) ) : ?>
				<div class="row py-3">
					<h2 class="section__subtitle"><?php the_field( 'title_team' ); ?></h2>
				</div>
			<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<?php
			$team_freelancer_posts = get_field( 'team_members_freelancers' );
			if ( $team_freelancer_posts ) :
				foreach ( $team_freelancer_posts as $team_freelancer_post ) :
					//var_dump($team_full_post);
					$member_id       = $team_freelancer_post->ID;
					$member_name     = get_field( 'name', $member_id );
					$member_position = get_field( 'position', $member_id );
					$member_link     = get_the_permalink( $member_id );
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
						<a class="card-post__btn" href="<?php echo esc_url( $member_link ); ?>"><?php esc_html_e( 'Mehr erfahren', 'digid' ); ?></a>
					</div>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>
