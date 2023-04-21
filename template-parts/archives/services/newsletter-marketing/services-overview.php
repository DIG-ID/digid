<section class="section section-services-overview">
	<div class="container container-short">
		<div class="row align-items-center mb-2 d-none d-lg-block">
			<div class="col-12">
				<span class="section__title--line"></span>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12 col-lg-6 left-col">
			<p class="services__overview-title"><?php the_field( 'service_overview_title' ); ?></p>
			<?php if ( have_rows( 'service_overview_service_descriptions' ) ) : ?>
				<?php $count = 0; ?>
				<?php while ( have_rows( 'service_overview_service_descriptions' ) ) : the_row(); ?>
					<p class="services__overview-description<?php if ( $count == 0 ) { echo ' active'; } ?>" style="<?php if ( $count != 0 ) { echo 'display:none;'; } ?>"><?php the_sub_field( 'description' ); ?></p>
					<?php $count++; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="col-12 col-lg-6 right-col">
			<?php if ( have_rows( 'service_overview_service_list' ) ) : ?>
				<?php $count = 0; ?>
				<?php while ( have_rows( 'service_overview_service_list' ) ) : the_row(); ?>
					<p class="services__overview-listItem clickable<?php if ( $count == 0 ) { echo ' active'; } ?>" data-index="<?php echo $count; ?>"><?php the_sub_field( 'name' ); ?></p>
					<span class="section__title--line"></span>
					<?php $count++; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		</div>
	</div>
</section>