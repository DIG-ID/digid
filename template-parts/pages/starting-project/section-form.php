<section class="section section-st-project section-form min-vh-100">
    <div class="container container-starting-project">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-7 st__col">
                <h1 class="section__subtitle"><?php the_field('form_title') ?></h1>
            </div>
            <div class="col-12">
                <?php echo do_shortcode( get_post_meta( get_the_id(), 'form_shortcode', true ) ); ?>
            </div>
        </div>
    </div>
</section>