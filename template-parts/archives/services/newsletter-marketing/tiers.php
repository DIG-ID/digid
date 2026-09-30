<section class="section section-tiers">
	<div class="container container-short">
        <?php $tiers_title = get_field( 'section_tiers_title' ); ?>
        <?php if ( $tiers_title ) : ?>
        <div class="row">
            <div class="col-12">
                <h2 class="section__subtitle"><?php echo wp_kses_post( $tiers_title ); ?></h2>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <?php
            if( have_rows('section_tiers_tiers_repeater') ):
                while( have_rows('section_tiers_tiers_repeater') ) : the_row(); ?>
                  <div class="col-12 col-lg-4">
                    <div class="section-tiers__card-wrapper">
                        <h3 class="section-tiers__name"><?php the_sub_field( 'name' ); ?></h3>
                        <p class="section-tiers__list list-intro-text"><?php echo esc_html_e( 'Inklusive:', 'digid' ); ?></p>
                        <p class="section-tiers__list"><?php the_sub_field( 'list' ); ?></p>
                        <img class="section-tiers__mailImg" src="<?php echo wp_upload_dir()['url'] . '/mail.svg' ?>" alt="" title="" />
                    </div>
                  </div>
               <?php endwhile;
            endif; ?>
        </div>
	</div>
</section>
