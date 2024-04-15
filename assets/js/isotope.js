import imagesLoaded from 'imagesloaded';
import isotope from 'isotope-layout';
$(function() {

  // Projects page grid
  if ($('body').is('.post-type-archive-projects')) {
    const grid = new isotope( '.grid-projects', {
      // options
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer'
      }
    });
    imagesLoaded(grid.element).on('progress', function() {
      grid.layout();
    });

    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {

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

  // Case studies page grid
  if ($('body').is('.post-type-archive-case_studies')) {
    const csGrid = new isotope( '.grid-projects', {
      // options
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer'
      }
    });
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      csGrid.arrange({filter: filterValue});
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

  // Jobs page grid
  if ($('body').is('.post-type-archive-job')) {
    const jobGrid = new isotope( '.grid-jobs', {
      // options
      itemSelector: '.grid-item',
      layoutMode: 'fitRows',
    });
    // filter items on button click
    $('.job-filters-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      jobGrid.arrange({filter: filterValue});
    });
    // change is-checked class on buttons
    $('.job-filters-button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'button', function( event ) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $( event.currentTarget );
        $button.addClass('is-checked');
      });
    });

  }

  // TEam portfolio page grid
  if ($('body').is('.single-team')) {
    const jobGrid = new isotope( '.grid-portfolio', {
      // options
      itemSelector: '.grid-item',
      layoutMode: 'fitRows',
    });
    // filter items on button click
    $('.portfolio-filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      jobGrid.arrange({filter: filterValue});
    });
    // change is-checked class on buttons
    $('.portfolio-filter-button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'button', function( event ) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $( event.currentTarget );
        $button.addClass('is-checked');
      });
    });

  }

  // Posts filter grid
  if ($('body').is('.blog')) {
    const pGrid = new isotope( '.blog-grid', {
      // options
      itemSelector: '.type-post',
      percentPosition: true,
    });
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      pGrid.arrange({filter: filterValue});
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