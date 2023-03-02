<section class="section section-about-team position-relative">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 col-lg-4 offset-lg-1 p-0"><?php the_field('team_intro_left'); ?></div>
            <div class="col-12 col-lg-4 offset-lg-2 p-0"><?php the_field('team_intro_right'); ?></div>
        </div>
        <div class="row align-items-center py-5">
            <div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h2 class="section__title"><?php echo esc_html_e( 'Team', 'digid' ); ?></h2>
			</div>
        </div>
        <div class="row py-3">
            <h2 class="section__subtitle"><?php the_field('title_team'); ?></h2>
        </div>
    </div>
</section>