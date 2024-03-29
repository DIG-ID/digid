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
            <a class="card-related-post__link" href="<?php the_permalink( $rpod_id ) ?>">
                <div class="container card-related-post__content">
                    <div class="row">
                        <div class="col-4 p-0">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $rpod_id ), 'card-related-post-thumbnail' ); ?>
                            <img src="<?php echo $image[0]; ?>" alt="" title="">
                        </div>
                        <div class="col-8 py-3">
                            <h3 class="card-related-post__title"><?php echo mb_strimwidth( get_the_title( $rpod_id ), 0, 36, "..." ); ?></h3>
                            <?php 
                            $output = '';
                            $categories = get_the_category( $rpod_id );
                            $category = $categories[0]->name;
                            $output .= $category .', '; 
                            $output1 = rtrim($output, ', '); ?>
                            <p class="card-related-post__categ"><?php echo mb_strimwidth( $output1, 0, 36, "..." );; ?></p>
                            <p class="card-related-post__text"><?php echo mb_strimwidth( get_the_excerpt( $rpod_id ), 0, 56, "..." ); ?></p>
                        </div>
                    </div>
                </div>
            </a>
        </article>
        <?php endforeach; ?>
            <?php else : ?>
            <?php
            $args = array(
                'post_type'      => 'post',
                'orderby'        => 'ID',
                'post_status'    => 'publish',
                'order'          => 'DESC',
                'posts_per_page' => 5,
                'post__not_in'   => [get_the_ID()],
                );
                $result = new WP_Query( $args );
                if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                
                <article id="post-<?php echo $rpod_id ?>" <?php post_class( 'col-12 col-lg-12 card-related-post' ); ?>>
                        <a class="card-related-post__link" href="<?php the_permalink( $rpod_id ) ?>">
                            <div class="container card-related-post__content">
                                <div class="row">
                                    <div class="col-4 p-0">
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $rpod_id ), 'card-related-post-thumbnail' ); ?>
                                        <img src="<?php echo $image[0]; ?>" alt="" title="">
                                    </div>
                                    <div class="col-8 py-3">
                                        <h3 class="card-related-post__title"><?php echo mb_strimwidth( get_the_title( $rpod_id ), 0, 36, "..." ); ?></h3>
                                        <?php 
                                        $categories = get_the_category( $rpod_id );
                                        $category = $categories[0]->name;
                                        $output .= $category .', ';
                                        $output1 = rtrim($output, ', '); ?>
                                        <p class="card-related-post__categ"><?php echo mb_strimwidth( $output1, 0, 36, "..." );; ?></p>
                                        <p class="card-related-post__text"><?php echo mb_strimwidth( get_the_excerpt( $rpod_id ), 0, 56, "..." ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article> 

                <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>    
            <?php endif;
            ?>