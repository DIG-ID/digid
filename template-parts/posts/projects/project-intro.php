<section class="section-intro">
	<div class="container">
	<div div class="row align-items-center section__title--wrapper">
			<div class="col-12">
				<a class="section__btn--back" href="<?php echo esc_url( get_post_type_archive_link( 'projects' ) ); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
				<a class="section__title" href="<?php echo esc_url( get_post_type_archive_link( 'projects' ) ); ?>" ><?php esc_html_e( 'Projects', 'digid' ); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-8">
				<h1 class="section__subtitle"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
