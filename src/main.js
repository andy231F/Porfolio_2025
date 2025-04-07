var swiper = new Swiper(".multiple-slide-carousel", {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    1920: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1028: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    990: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
  },
});
