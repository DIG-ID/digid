<section class="section section-reporting">
	<div class="container container-short">
        <div class="row">
            <div class="col-12">
                <p class="section-reporting__title"><?php the_field('section_reporting_reporting_group_title'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <p class="section-reporting__text"><?php the_field('section_reporting_reporting_group_text_content'); ?></p>
            </div>
            <div class="col-12 col-lg-6">
            <?php 
            $image = get_field('section_reporting_reporting_group_illustration');
            $size = 'full';
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            ?>
            </div>
        </div>
		
	</div>
</section>
