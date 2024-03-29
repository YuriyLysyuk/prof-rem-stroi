// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/swiper-bundle.css';

import './_Swiper.scss';

// Список с классами слайдеров для примеров
const exampleSwipers = [
  {
    swiperClass: '.js-example-1',
    thumbsClass: '.js-example-thumbs-1',
  },
  {
    swiperClass: '.js-example-2',
    thumbsClass: '.js-example-thumbs-2',
  },
  {
    swiperClass: '.js-example-3',
    thumbsClass: '.js-example-thumbs-3',
  },
  {
    swiperClass: '.js-example-4',
    thumbsClass: '.js-example-thumbs-4',
  },
];

const exampleSwiperOptions = {
  loop: true,
  allowTouchMove: false,
  grabCursor: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
};

const exampleThumbsSwiperOptions = {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  grabCursor: true,
  freeMode: true,
  watchSlidesProgress: true,
};

exampleSwipers.forEach(({ swiperClass, thumbsClass }, i, swipers) => {
  swipers[i]['thumbsSwiper'] = new Swiper(
    thumbsClass,
    exampleThumbsSwiperOptions
  );

  swipers[i]['swiper'] = new Swiper(swiperClass, {
    ...exampleSwiperOptions,
    thumbs: {
      swiper: swipers[i]['thumbsSwiper'],
    },
  });
});

const videoReviewsSwiper = new Swiper('.js-video-reviews', {
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 16,
  navigation: {
    enabled: true,
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  breakpoints: {
    576: {
      grabCursor: true,
      slidesPerView: 2,
      grid: {
        fill: 'row',
        rows: 2,
      },
      spaceBetween: 16,
      navigation: {
        enabled: false,
      },
    },
    992: {
      grabCursor: true,
      slidesPerView: 2,
      grid: {
        fill: 'row',
        rows: 2,
      },
      spaceBetween: 20,
      navigation: {
        enabled: false,
      },
    },
  },
});

const certificatesSwiper = new Swiper('.js-certificates', {
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 16,
  navigation: {
    enabled: true,
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  breakpoints: {
    576: {
      grabCursor: true,
      slidesPerView: 2,
      spaceBetween: 16,
      navigation: {
        enabled: true,
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    },
    992: {
      grabCursor: true,
      slidesPerView: 4,
      spaceBetween: 20,
      navigation: {
        enabled: true,
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    },
  },
});
