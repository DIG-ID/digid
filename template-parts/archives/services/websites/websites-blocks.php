<section class="section section-websites-blocks">
	<div class="container container-short">
        <?php if( have_rows('section_repeater') ):
        while( have_rows('section_repeater') ) : the_row(); ?>
        <div class="row section-websites__row">
            <div class="col-12 col-lg-6">
            <p class="section-websites__title"><?php the_sub_field('title'); ?></p>
                <?php if( have_rows('list') ):
                while( have_rows('list') ) : the_row(); ?>
                <p class="section-websites__list"><?php the_sub_field('name'); ?></p>
                <span class="section__title--line"></span>
                <?php endwhile;
                endif; ?>
                <p class="section-websites__description"><?php the_sub_field('description'); ?></p>
            </div>
            <div class="col-12 col-lg-6">
                <?php 
                $image = get_sub_field('image');
                $size = 'full';
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size, "", ["class" => "section-websites__image","alt"=>"illustration"] );
                }
                ?>
            </div>
        </div>
        <?php endwhile;
        endif; ?>
	</div>
</section>