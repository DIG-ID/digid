<section class="section section-tiers">
	<div class="container container-short">
        <div class="row">
            <div class="col-12">
                <p class="section-tiers__title"><?php the_field('section_tiers_title'); ?></p>
            </div>
        </div>
        <div class="row">
            <?php
            if( have_rows('section_tiers_tiers_repeater') ):
                while( have_rows('section_tiers_tiers_repeater') ) : the_row(); ?>
                  <div class="col-12 col-lg-4">
                    <h3 class="section-tiers__name"><?php the_sub_field('name'); ?></h3>
                    <p class="section-tiers__list"><?php the_sub_field('list'); ?></p>
                    <img src="<?php echo wp_upload_dir()['url'] . '/mail.svg' ?>" alt="" title="" />
                  </div>
               <?php endwhile;
            endif; ?>
        </div>
	</div>
</section>
