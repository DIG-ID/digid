<?php
$btn_url = get_theme_mod( 'start_project' );
if ( $btn_url ) :
	echo '<a href="' . $btn_url . '" class="btn-start-project-sticky">' . esc_html__( 'Projekt Starten', 'digid' ) . '</a>';
endif;

