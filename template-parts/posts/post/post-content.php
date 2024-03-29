<section class="section-content">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-7 post-content">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'single-featured-image' );
				endif;
				the_title( '<h1 class="post-title">', '</h1>' );
				get_template_part( 'template-parts/loops/loop', 'related-categories' );
				the_content();
				?>
			</div>
			<sidebar class="col-12 col-lg-4 post-sidebar">
				<p class="post-sidebar__title"><?php esc_html_e( 'Verwandte Dienstleistungen', 'digid' ); ?></p>
				<?php get_template_part( 'template-parts/loops/loop', 'post-related-services' ); ?>
				<p class="post-sidebar__title"><?php esc_html_e( 'Verwandte Beiträge', 'digid' ); ?></p>
				<?php get_template_part( 'template-parts/loops/loop', 'post-related-posts' ); ?>
				<?php
				if ( is_active_sidebar( 'sidebar-1' ) ) :
					dynamic_sidebar( 'sidebar-1' );
				endif;
				?>
			</sidebar>
		</div>
	</div>
</section>
