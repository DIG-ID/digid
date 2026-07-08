import Swiper from 'swiper/bundle';

$(function() {

  const testiSwiper = new Swiper( '.testimonials-swiper', {
    loop: true,
    speed: 500,
    navigation: {
      nextEl: '.swiper-arrow-next',
      prevEl: '.swiper-arrow-prev',
    },
  });

  if ( $(".section-hero")[0] ) {
    const homeIntroSwiper = new Swiper('.swiper-home-intro', {
      // Optional parameters
      autoplay: {
        delay: 2000,
      },
      effect: 'fade',
      speed: 600,
      loop: true,
    });
  }

});