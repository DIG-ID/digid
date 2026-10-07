<section class="section section-intro">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-3 col-md-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-9 col-md-11">
				<div class="section__title">
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) :
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					endif;
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<?php
				$page_blog = get_posts([
					'name'      => 'blog',
					'post_type' => 'page'
				]);
				if ( $page_blog )
				{ ?>
					<div class="section__subtitle"><h1><?php echo wp_strip_all_tags($page_blog[0]->post_content); ?></h1></div>
				<?php } ?>
			</div>
		</div>
		<?php
		$blog_page_id    = apply_filters( 'wpml_object_id', (int) get_option( 'page_for_posts' ), 'page', true );
		$blog_intro_text = $blog_page_id ? get_field( 'intro_text', $blog_page_id ) : '';
		if ( $blog_intro_text ) :
			?>
			<div class="row">
				<div class="col-12 col-md-10 col-lg-8 col-xl-7 offset-lg-1">
					<p class="section__description"><?php echo wp_kses_post( $blog_intro_text ); ?></p>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
