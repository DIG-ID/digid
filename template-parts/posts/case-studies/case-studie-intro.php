<section class="section-intro section-intro--dark">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-6">
				<div class="row align-items-center section__title--wrapper">
					<div class="col-2">
						<span class="section__title--line"></span>
					</div>
					<div class="col-10">
						<div class="section__title">
							<?php
							if ( function_exists( 'yoast_breadcrumb' ) ) :
								yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
							endif;
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h1 class="section__subtitle"><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12 section__description">
						<?php the_field( 'case_studie_description' ); ?>
					</div>
				</div>
			</div><!-- .col -->
			<div class="col-5">
				<sidebar class="col-12 col-lg-4 post-sidebar">
					<div class="case-studies-details">
						<?php
						$sector = get_field( 'case_studie_scope_sector' );
						if ( $sector ) :
							echo '<h3>' . esc_html_e( 'Sector', 'digid' ) . '</h3>';
							echo '<p>' . $sector . '</p>';
						endif;
						?>
						<h3><?php esc_html_e( 'Services', 'digid' ); ?></h3>
						<?php get_template_part( 'template-parts/loops/loop', 'related-services-link' ); ?>
						<span class="line"></span>
					</div>
				</sidebar>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</section>
