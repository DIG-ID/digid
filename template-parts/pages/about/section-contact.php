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
            <div class="col-12 col-lg-6 mb-5">
                <p class="section__subtitle mb-3"><?php the_field('basel_title_field') ?></p>
                <?php 
                $basel_image = get_field('basel_image');
                if ( $basel_image ) : 
                    echo wp_get_attachment_image( $basel_image, 'contact-image-thumbnail' );
                else : 
                    echo '<img src="https://via.placeholder.com/530x340" alt="">';
                endif; ?>
                <p class="section__description-contact fixed-height mt-2 mb-5"><?php the_field('basel_description') ?></p>
                <div class="align-items-center d-flex mb-2">
                    <div class="contact-icon__col justify-content-center d-flex me-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_email.svg" alt="" title="" /></div>
                    <a href="mailto:<?php the_field('basel_email'); ?>" class="section__description-contact text-decoration-none mb-0"><?php the_field('basel_email'); ?></a>
                </div>
                <div class="align-items-center d-flex mb-2">
                    <div class="contact-icon__col justify-content-center d-flex me-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_phone.svg" alt="" title="" /></div>
                    <a href="tel:<?php the_field('basel_phone'); ?>" class="section__description-contact text-decoration-none mb-0"><?php the_field('basel_phone'); ?></a>
                </div>
                <div class="align-items-center d-flex">
                    <div class="contact-icon__col justify-content-center d-flex me-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_location.svg" alt="" title="" /></div>
                    <p class="section__description-contact mb-0"><?php the_field('basel_address'); ?></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-5">
                <p class="section__subtitle mb-3"><?php the_field('porto_title_field') ?></p>
                <?php 
                $porto_image = get_field('porto_image');
                if ( $porto_image ) : 
                    echo wp_get_attachment_image( $porto_image, 'contact-image-thumbnail' );
                else : 
                    echo '<img src="https://via.placeholder.com/530x340" alt="">';
                endif; ?>
                <p class="section__description-contact fixed-height mt-2 mb-5"><?php the_field('porto_description') ?></p>
                <div class="align-items-center d-flex mb-2">
                    <div class="contact-icon__col justify-content-center d-flex me-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_email.svg" alt="" title="" /></div>
                    <a href="mailto:<?php the_field('porto_email'); ?>" class="section__description-contact text-decoration-none mb-0"><?php the_field('porto_email'); ?></a>
                </div>
                <div class="align-items-center d-flex mb-2">
                    <div class="contact-icon__col justify-content-center d-flex me-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_phone.svg" alt="" title="" /></div>
                    <a href="tel:<?php the_field('porto_phone'); ?>"p class="section__description-contact text-decoration-none mb-0"><?php the_field('porto_phone'); ?></a>
                </div>
                <div class="align-items-center d-flex">
                    <div class="contact-icon__col justify-content-center d-flex me-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_location.svg" alt="" title="" /></div>
                    <p class="section__description-contact mb-0"><?php the_field('porto_address'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>