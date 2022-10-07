var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: false,
  loopFillGroupWithBlank: false,
  pagination: false,
  breakpoints: {
    450: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
    },
    1240: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1440: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var BrandSwiper = new Swiper(".BrandSwiper", {
  slidesPerView: 4,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: false,
  breakpoints: {
    450: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 6,
    },
    1240: {
      slidesPerView: 7,
      spaceBetween: 0,
    },
    1440: {
      slidesPerView: 7,
      spaceBetween: 50,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var discountCatgory = new Swiper(".discountCatgory", {
  slidesPerView: 2,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: false,
  breakpoints: {
 
    1240: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1440: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".catSwiper", {
  slidesPerView: 3,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: false,
  breakpoints: {
 

    350: {
      slidesPerView: 4,
    },
    640: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 5,
    },
    1000: {
      slidesPerView: 6,
      spaceBetween: 0,
    },
    1240: {
      slidesPerView: 10,
      spaceBetween: 0,
    },
  },
  loopFillGroupWithBlank: false,
  pagination: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".proSwiper", {
  slidesPerView: 2,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  breakpoints: {

    500: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    800: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
    1000: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1208: {
      slidesPerView: 5,
      spaceBetween: 0,
    },
  },
  pagination: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".brandSwiper", {
  slidesPerView: 7,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

