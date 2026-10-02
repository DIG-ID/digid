<?php
/**
 * "Start a project" modal.
 *
 * Renders the form of the "Starting Project" page inside a centered modal box
 * over a blurred page.
 * Any link pointing to that page opens this modal instead of navigating
 * (see assets/js/start-project-modal.js). The page itself remains as a
 * fallback for no-JS users and search engines.
 */

$digid_sp_pages = get_pages(
	array(
		'meta_key'         => '_wp_page_template',
		'meta_value'       => 'page-templates/page-starting-project.php',
		'number'           => 1,
		'suppress_filters' => false,
	)
);

if ( empty( $digid_sp_pages ) ) :
	return;
endif;

$digid_sp_page_id = apply_filters( 'wpml_object_id', $digid_sp_pages[0]->ID, 'page', true );

// No modal on the project request page itself.
if ( is_page( $digid_sp_page_id ) ) :
	return;
endif;

$digid_sp_shortcode = get_post_meta( $digid_sp_page_id, 'form_shortcode', true );

if ( ! $digid_sp_shortcode ) :
	return;
endif;

// URLs whose links should open the modal.
$digid_sp_urls = array_values(
	array_filter(
		array_unique(
			array(
				get_permalink( $digid_sp_page_id ),
				get_permalink( $digid_sp_pages[0]->ID ),
				get_theme_mod( 'start_project' ),
			)
		)
	)
);
?>
<div class="modal fade modal-start-project" id="modal-start-project" tabindex="-1" aria-labelledby="modal-start-project-title" aria-hidden="true" data-lenis-prevent data-trigger-urls="<?php echo esc_attr( wp_json_encode( $digid_sp_urls ) ); ?>">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-start-project__header">
				<h2 class="section__subtitle" id="modal-start-project-title"><?php echo esc_html( get_field( 'form_title', $digid_sp_page_id ) ); ?></h2>
				<button type="button" class="modal-start-project__close" data-bs-dismiss="modal" aria-label="<?php esc_attr_e( 'Schliessen', 'digid' ); ?>">
					<span></span><span></span>
				</button>
			</div>
			<div class="modal-body">
				<section class="section section-st-project section-form">
					<div class="container container-starting-project">
						<div class="row justify-content-center align-items-center">
							<div class="col-12">
								<?php echo do_shortcode( $digid_sp_shortcode ); ?>
							</div>
						</div>
						<div class="row justify-content-center align-items-center">
							<div class="col-12 text-center">
								<a class="section-st-project--option-link js-start-project-message-link" href="<?php echo esc_url( get_home_url() ); ?>#section-form"><span class="section-st-project--option-link-text"><?php esc_html_e( 'Ich möchte nur eine Botschaft senden.', 'digid' ); ?></span> <svg xmlns="http://www.w3.org/2000/svg" width="32.439" height="11.914" aria-hidden="true"><path d="M1 22.934h29.82l-4.305 4.306.967.967 5.957-5.957-5.957-5.957-.967.967 4.305 4.305H1Z" transform="translate(-1 -16.293)"/></svg></a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
