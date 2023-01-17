<section class="section section-start-project section-form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <p class="section__subtitle"><?php the_field('form_title') ?></p>
            </div>
            <div class="col-12 col-lg-7">
                <?php echo do_shortcode( get_post_meta( get_the_id(), 'form_shortcode', true ) ); ?>
            </div>
        </div>
    </div>
</section>