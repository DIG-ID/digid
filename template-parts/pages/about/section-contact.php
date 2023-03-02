<section class="section section-st-kontakt">
    <div class="container">
        <div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h2 class="section__title"><?php echo esc_html_e( 'Kontakt', 'digid' ); ?></h2>
			</div>
		</div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <p class="section__subtitle"><?php the_field('basel_title_field') ?></p>
                <p class="section__description-contact"><?php the_field('basel_description') ?></p>
            </div>
            <div class="col-12 col-lg-6">
                <p class="section__subtitle"><?php the_field('porto_title_field') ?></p>
                <p class="section__description-contact"><?php the_field('porto_description') ?></p>
            </div>
        </div>
    </div>
</section>