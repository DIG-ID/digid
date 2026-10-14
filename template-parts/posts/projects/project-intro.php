<section class="section-intro">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<a class="project-back-link" href="<?php echo esc_url( get_post_type_archive_link( 'projects' ) ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="32.4" height="11.9" aria-hidden="true"><path d="M32.4 5.3H2.6L6.9 1 6 0 0 6l6 6 1-1-4.4-4.4h29.8V5.3z"/></svg>
					<span><?php esc_html_e( 'Projekte', 'digid' ); ?></span>
				</a>
				<h1 class="section__subtitle"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
