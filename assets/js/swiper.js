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

});