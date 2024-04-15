import { Fancybox } from "@fancyapps/ui";
$(function() {
  if ($('body').is('.single-team')) {
    console.log( 'hei yes' );
    Fancybox.bind("[data-fancybox]", {
      // Your custom options
    });
  }
});