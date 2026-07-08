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

  if ( $(".clients-logos-swiper")[0] ) {
    const clientsLogosSwiper = new Swiper('.clients-logos-swiper', {
      slidesPerView: 'auto',
      spaceBetween: 120,
      loop: true,
      loopAdditionalSlides: 10,
      allowTouchMove: false,
      speed: 4000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
      },
    });

    // Autoplay with delay:0 can stall when the tab is backgrounded and a
    // transitionEnd event is dropped. Restart it whenever the tab is shown again.
    document.addEventListener('visibilitychange', function () {
      if ( ! document.hidden && clientsLogosSwiper.autoplay ) {
        clientsLogosSwiper.autoplay.start();
      }
    });
  }

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