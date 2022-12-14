<section class="section section-projects">
	<div class="container">
		<div div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h2 class="section__title">Work</h2>
			</div>
		</div>
		<div class="row align-items-center section__subtitle--wrapper">
			<div class="col-12 col-lg-8 offset-lg-1">
				<p class="section__subtitle">Insert title about projects</p>
			</div>
			<div class="col-12 col-lg-3 text-end">
				<a class="section__btn" href=""><?php esc_html_e( 'View all projects', 'digid' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
		</div>
		<div class="row grid-projects">
			<div class="grid-sizer col-12 col-md-6"></div>
			<?php get_template_part( 'template-parts/loops/loop', 'projects' ); ?>
		</div>
	</div>
</section>
