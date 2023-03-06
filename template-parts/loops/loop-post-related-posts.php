<div class="row">
    <?php
    if ( is_singular(  ) ) :
        $pod = pods( 'post', get_the_id() );
    endif;
    $rpods = $pod->field( 'related_posts' );
    if ( ! empty( $rpods ) ) :
        $rnames = array();
        foreach ( $rpods as $rpod ) :
            $rpod_id  = $rpod['ID'];
            $rnames[] = get_the_title( $rpod_id ); ?>
            
            <article id="post-<?php echo $rpod_id ?>" <?php post_class( 'col-12 col-lg-12 card-related-post' ); ?>>
                <div class="container card-related-post__content">
                    <div class="row">
                        <div class="col-4 p-0">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $rpod_id ), 'card-related-post-thumbnail' ); ?>
                            <img src="<?php echo $image[0]; ?>" alt="" title="">
                        </div>
                        <div class="col-8">
                            <a href="<?php the_permalink( $rpod_id ); ?>" class="card-service__title"><h3><?php echo get_the_title( $rpod_id ); ?></h3></a>
                            <p><?php echo get_the_excerpt( $rpod_id ); ?></p>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    <?php endif;
    ?>
</div>