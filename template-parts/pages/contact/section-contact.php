<section class="section section-st-kontakt section-contact-page">
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
                <?php 
                $basel_image = get_field('basel_image');
                if( $basel_image ) {
                    echo wp_get_attachment_image( $basel_image, 'full' );
                }
                ?>
                <p class="section__description"><?php the_field('basel_description') ?></p>
            </div>
            <div class="col-12 col-lg-6">
                <p class="section__subtitle"><?php the_field('porto_title_field') ?></p>
                <?php
                $porto_image = get_field('porto_image');
                if( $porto_image ) {
                    echo wp_get_attachment_image( $porto_image, 'full' );
                } ?>
                <p class="section__description"><?php the_field('porto_description') ?></p>
            </div>
        </div>
    </div>
</section>