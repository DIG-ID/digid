<section class="section section-hero">
	<div class="container">
		<div class="row section-hero__row ">
			<div class="col-12">
				<h2 class="section-hero__title">
					<span>forward</span> <br>
					<span>thinking</span> <br>
					<span>marketing</span> <br>
					<span>solutions</span>
				</h2>
			</div>
		</div>
		<?php get_template_part( 'template-parts/modules/module', 'start-project' ); ?>
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-sm-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-sm-11">
				<h2 class="section__title"><?php the_field( 'intro_section_title' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-5 offset-lg-1 position-relative">
				<p class="section__subtitle"><?php the_field( 'intro_section_subtitle' ); ?></p>
				<div class="section__description">
					<?php the_field( 'intro_section_description' ); ?>
				</div>
				<a class="section__btn" href="<?php echo esc_url( get_field( 'intro_section_button_url' ) ); ?>"><?php the_field( 'intro_section_button_text' ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
			</div>
			<div class="col-12 col-lg-5 text-end">
				<?php
				$image = get_field( 'intro_section_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'home-intro-image' );
				else :
					echo '<img src="https://via.placeholder.com/405x500" alt="">';
				endif;
				?>
			</div>
		</div>
		
	</div>
</section>