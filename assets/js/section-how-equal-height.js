$(function() {

	const $cardsRow = $('.section-how .why-how-cards-row');

	if ( ! $cardsRow.length ) {
		return;
	}

	const $cards = $cardsRow.find('.card-service__content');

	function equalizeCardHeights() {
		$cards.css('min-height', '');

		// Needed from md up to (but excluding) xl, where cards can still
		// wrap onto more than one row and the flex/grid "same row" height
		// matching leaves a lone card on the extra row shorter than the
		// ones above it. From xl up, all 3 cards always fit on one row.
		const isBelowXl = window.matchMedia('(min-width: 768px) and (max-width: 1199.98px)').matches;

		if ( ! isBelowXl ) {
			return;
		}

		let maxHeight = 0;
		$cards.each(function() {
			maxHeight = Math.max( maxHeight, $(this).outerHeight() );
		});

		$cards.css('min-height', maxHeight);
	}

	equalizeCardHeights();

	let resizeTimeout;
	$(window).on('resize', function() {
		clearTimeout(resizeTimeout);
		resizeTimeout = setTimeout(equalizeCardHeights, 150);
	});

});
