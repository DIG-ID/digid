<section class="section section-intro section-about-intro position-relative">
    <div class="container-fluid g-0 min-vh-100">
        <div class="about__image-container d-flex position-absolute overflow-hidden justify-content-center">
            <?php 
            $header_image = get_field('header_image');
            if( $header_image ) {
                echo wp_get_attachment_image( $header_image, 'full', '', ['class' => 'about__header-image','alt'=>'About Header Image'] );
            } ?>
        </div>
        <div class="container about__container">
            <div class="row align-items-center section__title--wrapper">
                <div class="col-1">
                    <span class="section__title--line" style="background-color: #00CCCC;"></span>
                </div>
                <div class="col-11">
                    <h2 class="section__title">
                        <?php
                        if ( function_exists( 'yoast_breadcrumb' ) ) :
                            yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
                        endif;
                        ?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <h1 class="section__subtitle"><?php the_field('intro_title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5 offset-lg-1">
                    <p class="section__description"><?php the_field('intro_description') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>