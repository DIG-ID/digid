import Masonry from 'masonry-layout';
$(function() {
  if ( $("body").is(".page-template-page-home") || $("body").is(".single-services") || $("body").is(".post-type-archive-services") ) {
    const projects_masonry = new Masonry( '.grid-projects', {
      // options
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true,
    });
  }
});