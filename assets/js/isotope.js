import isotope from 'isotope-layout';
$(function() {
  if ($('body').is('.post-type-archive-projects')) {
    const grid = new isotope( '.grid-projects', {
      // options
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer'
      }
    });
    console.log(grid);
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      console.log(grid);
      var filterValue = $(this).attr('data-filter');
      grid.arrange({filter: filterValue});
    });

    // change is-checked class on buttons
    $('.filter-button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'button', function( event ) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $( event.currentTarget );
        $button.addClass('is-checked');
      });
    });
  }
});