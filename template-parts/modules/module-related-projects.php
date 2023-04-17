<section class="section section-services">
	<div class="container">
	<div div class="row align-items-center section__title--wrapper mb-5 mb-lg-0">
			<div class="col-3 col-md-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-md-6">
				<h2 class="section__title"><?php esc_html_e( 'Bisherige Projekte', 'digid' ); ?></h2>
			</div>
			<div class="col-12 col-md-5 text-end d-none d-lg-block">
				<a class="section__btn" href="<?php echo esc_url( get_post_type_archive_link( 'projects' ) ); ?>"><?php esc_html_e( 'Alle Projekte im Überblick', 'digid' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
		</div>
		<div class="row grid-projects">
			<div class="grid-sizer col-12 col-md-6"></div>
			<?php get_template_part( 'template-parts/loops/loop', 'related-projects' ); ?>
		</div>
		<div class="row d-block d-lg-none">
			<div class="col-12">
				<a class="section__btn" href="<?php echo esc_url( get_post_type_archive_link( 'projects' ) ); ?>"><?php esc_html_e( 'Alle Projekte im Überblick', 'digid' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
		</div>
	</div>
</section>
