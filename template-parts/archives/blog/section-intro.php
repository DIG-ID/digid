<section class="section section-intro">
	<div class="container">
		<div class="row align-items-center section__title--wrapper">
			<div class="col-1">
				<span class="section__title--line"></span>
			</div>
			<div class="col-11">
				<h1 class="section__title">
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) :
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					endif;
					?>
				</h1>
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
					<h2 class="section__subtitle"><?php echo $page_blog[0]->post_content; ?></h2>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
