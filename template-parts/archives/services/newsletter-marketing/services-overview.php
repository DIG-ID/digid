<section class="section section-services-overview">
	<div class="container container-short">
		<div class="row align-items-center mb-2 d-none d-lg-block">
			<div class="col-12">
				<span class="section__title--line"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6">
				<p class="services__overview-title"><?php the_field( 'service_overview_title' ); ?></p>
				<p class="services__overview-description"><?php the_field( 'service_overview_description' ); ?></p>
			</div>
			<div class="col-12 col-lg-6">
				<?php
				if ( have_rows( 'service_overview_service_list' ) ) :
					while ( have_rows( 'service_overview_service_list' ) ) :
						the_row();
						?>
						<p class="services__overview-listItem"><?php the_sub_field( 'name' ); ?></p>
						<span class="section__title--line"></span>
					<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</section>