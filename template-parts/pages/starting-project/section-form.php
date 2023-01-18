<section class="section section-st-project section-form">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-7">
                <p class="section__subtitle">
                    <?php the_field('form_title') ?>
                    <br>
                    <?php echo esc_html__( 'Insert text', 'digid' ) ?>
                </p>
            </div>
            <div class="col-12 col-lg-7">
                <?php echo do_shortcode( get_post_meta( get_the_id(), 'form_shortcode', true ) ); ?>
            </div>
            <div class="col-12 col-lg-4 bg-logo">
				<?php get_template_part( 'template-parts/main-logo' ); ?>
			</div>
        </div>
    </div>
</section>