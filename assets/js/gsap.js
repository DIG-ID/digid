import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { TextPlugin } from "gsap/TextPlugin";
import Lenis from '@studio-freight/lenis';


gsap.registerPlugin(ScrollTrigger, TextPlugin);

//Lenis configuration
const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1.2,
  smooth: true
});

//get scroll value
/*lenis.on('scroll', (e) => {
  console.log(e)
})*/

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//GSAP ScrollTrigger integration
lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
})

$(function() {
  if ( $(".section-hero__title")[0] ) {

    //let cursor = document.querySelector(".section-hero__title .cursor");
   // gsap.to(cursor, {opacity: 0, ease:"power2.inOut", repeat: -1});

    //let words = gsap.utils.toArray(".section-hero__title .text"),
    //tl = gsap.timeline({delay: 0.15}),
    //timePerCharacter = 0.06;

    /*words.forEach(el => {
      tl.from(el, {autoAlpha: 0, duration:.1})
        .from(el, {text: "", duration: el.innerHTML.length * timePerCharacter});
    });*/
    
   // tl.to(cursor, {display: "none", duration: 0.2})
    //tl.to(".section-hero__title .text:first-child", {x: 400, display: "inline-block", skewX: "-30%", color: "#fff", duration: 0.8, ease: "power4.inOut"}, "<")
    //tl.to(".section-hero__title .text:first-child", {skewX: "0%", duration: 1, ease: "power4.inOut"}, "<0.4");

    /*tl
      .to(".section-hero__title .text:first-child", {x: 400, display: "inline-block", skewX: "-30%", color: "#fff", duration: 0.8, ease: "power4.inOut"}, "<")
      .to(".section-hero__title .text:first-child", {skewX: "0%", duration: 1, ease: "power4.inOut"}, "<0.4");
      */


    
    
    gsap.from(".section-hero__title .text", { delay: 0.15, autoAlpha: 0, y:'50px', opacity: 0, duration: 1, stagger: '0.25', duration: 1, ease: "back.inOut(2)", onComplete: () => {gsap.set( ".section-hero__title .text", {x: '0px'} ) } });
      //.to(".section-hero__title .text:first-child", { x:'400px', skewX: "-10%", color: "#fff", duration: 0.8, ease: "back.inOut(2)"}, "<2.5")
      //.to(".section-hero__title .text:first-child", {skewX: "0%", duration: .2, ease: "expo.inOut"}, "<0.6");

    gsap.to(".section-hero__title .text-forward", {
      scrollTrigger: {
        trigger: ".section-hero",
        endTrigger: ".section-hero__title",
        start: "top top",
        end: "bottom 40%",
        scrub: 1,
        //markers: true,
        toggleActions: "play none reverse none"
      },
      x: 400,
      color: "#fff",
      //onReverseComplete: () => gsap.to(".section-hero__title .text:first-child", { x:' 0px' })
    });

  }

  if ( $(".page-template-page-home")[0] || $(".post-type-archive-services")[0] ) {
    //console.log( 'temos services gsap' );
    let servicesTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-services",
        start: "100px 50%",
        end: "bottom 70%",
        //scrub: 1,
       // markers: true,
        //toggleActions: "restart pause reverse pause"
      },
    });
    servicesTl
      .from(".card-service", { autoAlpha: 0, x:'-50px', opacity: 0, duration: 0.5, stagger: '0.20', ease: "power3.out" });
  }

  if ( $(".page-template-page-home")[0] || $(".post-type-archive-projects")[0] || $(".post-type-archive-services")[0] || $(".single-services")[0] ) {
   // console.log( 'temos projects gsap' );
    let projectsTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-projects",
        start: "top 40%",
        end: "bottom 50%",
        //scrub: 1,
        //markers: true,
        //toggleActions: "restart pause reverse pause"
      },
    });
    projectsTl
      .from(".card-project", { autoAlpha: 0, y:'50px', opacity: 0, duration: 0.5, stagger: '0.20', ease: "power3.out" });
  }

  /*if ( $(".single-services")[0] ) {
    console.log( 'temos single service gsap' );
    const images = gsap.utils.toArray('.block__image > img');
    images.forEach(image => {
      gsap.from(image, { 
        autoAlpha: 0,
        x: "-200px",
        opacity: 0,
        duration: 0.6,
        //stagger: '0.20',
        ease: "power3.out",
        scrollTrigger: {
          trigger: image,
          //start: "top 40%",
          //end: "bottom 50%",
          scrub: true,
          //markers: true,
        }
      })
    });
  }*/

});