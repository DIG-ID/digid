<?php
/**
 * Hold back YouTube embeds until the visitor accepts marketing cookies (Cookiebot).
 *
 * The iframe src is moved to data-consent-src so nothing is requested from YouTube
 * before consent, and a placeholder is shown in its place. assets/js/consent-embeds.js
 * restores the src once Cookiebot reports marketing consent.
 *
 * @package digid
 */

/**
 * Replace the YouTube iframe src with a consent placeholder.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Parsed block.
 * @return string
 */
function digid_consent_block_youtube_embed( $block_content, $block ) {
	$is_youtube = ( 'core/embed' === $block['blockName'] && isset( $block['attrs']['providerNameSlug'] ) && 'youtube' === $block['attrs']['providerNameSlug'] )
		|| 'core-embed/youtube' === $block['blockName'];

	if ( ! $is_youtube || false === stripos( $block_content, '<iframe' ) ) {
		return $block_content;
	}

	$video_url = '';
	if ( preg_match( '#youtube(?:-nocookie)?\.com/embed/([A-Za-z0-9_-]+)#', $block_content, $matches ) ) {
		$video_url = 'https://www.youtube.com/watch?v=' . $matches[1];
	}

	// Without a src attribute nothing loads, and WP Rocket's lazyload leaves the iframe alone.
	$block_content = preg_replace( '#(<iframe\b[^>]*?)\ssrc=#i', '$1 data-consent-src=', $block_content, 1 );

	$placeholder  = '<div class="consent-embed-placeholder">';
	$placeholder .= '<div class="consent-embed-placeholder__inner">';
	$placeholder .= '<svg class="consent-embed-placeholder__icon" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" aria-hidden="true"><circle cx="28" cy="28" r="27" fill="none" stroke="currentColor" stroke-width="2"/><path d="M23 19v18l15-9z" fill="currentColor"/></svg>';
	$placeholder .= '<p class="consent-embed-placeholder__text">' . esc_html__( 'Dieses Video wird von YouTube bereitgestellt. Um es anzusehen, akzeptieren Sie bitte die Marketing-Cookies.', 'digid' ) . '</p>';
	$placeholder .= '<button type="button" class="consent-embed-placeholder__accept">' . esc_html__( 'Cookies akzeptieren und Video laden', 'digid' ) . '</button>';
	if ( $video_url ) {
		$placeholder .= '<a class="consent-embed-placeholder__link" href="' . esc_url( $video_url ) . '" target="_blank" rel="noopener noreferrer">' . esc_html__( 'Video auf YouTube ansehen', 'digid' ) . '</a>';
	}
	$placeholder .= '</div>';
	$placeholder .= '</div>';

	$block_content = preg_replace( '#</iframe>#i', '</iframe>' . $placeholder, $block_content, 1 );
	$block_content = preg_replace( '#<figure class="#', '<figure class="is-consent-blocked ', $block_content, 1 );

	return $block_content;
}
add_filter( 'render_block', 'digid_consent_block_youtube_embed', 10, 2 );
