<section class="section section-intro">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h2 class="section__title"><?php esc_html_e( 'Services', 'digid' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<p class="section__subtitle"><?php the_field( 'services_archive_title', 'option' ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-5 offset-lg-1">
				<p class="section__description"><?php the_field( 'services_archive_description', 'option' ); ?></p>
			</div>
		</div>
	</div>
</section>
