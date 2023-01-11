import Masonry from 'masonry-layout';
$(function() {
  const projects_masonry = new Masonry( '.grid-projects', {
    // options
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });
});