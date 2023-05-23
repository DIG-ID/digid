import luxy from 'luxy.js/src/js/luxy.js';
import imagesLoaded from 'imagesloaded';

$(function() {
  imagesLoaded(document.body, function() {
    luxy.init({
      wrapper: '.scroll-wrapper',
      targets : '.luxy-el',
      wrapperSpeed: 0.06
    });
  });
});