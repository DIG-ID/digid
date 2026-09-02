<section class="section section-intro section-chatGPTads-intro position-relative">
	<div class="container-fluid px-0">
		<div class="container chatGPTads__container">
			<div class="row align-items-center section__title--wrapper">
				<div class="col-3 col-md-1">
					<span class="section__title--line-light"></span>
				</div>
				<div class="col-9 col-md-11">
					<h2 class="section__title"><?php the_field( 'intro_overtitle' ) ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-7 offset-lg-1">
					<h1 class="section__subtitle"><?php the_field( 'intro_title' ) ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-5 offset-lg-1">
					<p class="section__description"><?php the_field( 'intro_text' ) ?></p>
					<?php $intro_button = get_field( 'intro_button' ); ?>
						<?php if ( $intro_button ) : ?>
							<a class="section__btn" href="<?php echo esc_url( $intro_button['url'] ); ?>" target="<?php echo esc_attr( $intro_button['target'] ? $intro_button['target'] : '_self' ); ?>"><span class="section__btn-text"><?php echo esc_html( $intro_button['title'] ); ?></span> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
						<?php endif; ?>
					<?php get_template_part( 'template-parts/modules/module', 'start-project' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

