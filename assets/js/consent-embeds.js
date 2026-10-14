$(function() {

	const $embeds = $('iframe[data-consent-src]');

	if ( ! $embeds.length ) {
		return;
	}

	function hasMarketingConsent() {
		return !! ( window.Cookiebot && window.Cookiebot.consent && window.Cookiebot.consent.marketing );
	}

	function loadEmbeds() {
		if ( ! hasMarketingConsent() ) {
			return;
		}

		$embeds.each(function() {
			const $iframe = $(this);

			if ( $iframe.attr('src') ) {
				return;
			}

			$iframe.attr('src', $iframe.attr('data-consent-src'));
			$iframe.closest('.is-consent-blocked').removeClass('is-consent-blocked');
			$iframe.siblings('.consent-embed-placeholder').remove();
		});
	}

	// Grant marketing consent from the placeholder, keeping the visitor's other choices.
	$(document).on('click', '.consent-embed-placeholder__accept', function() {
		if ( window.Cookiebot && typeof window.Cookiebot.submitCustomConsent === 'function' ) {
			window.Cookiebot.submitCustomConsent( window.Cookiebot.consent.preferences, window.Cookiebot.consent.statistics, true );
		}
	});

	window.addEventListener('CookiebotOnConsentReady', loadEmbeds);
	window.addEventListener('CookiebotOnAccept', loadEmbeds);

	// Cookiebot may already have resolved consent before this script ran.
	loadEmbeds();

});
