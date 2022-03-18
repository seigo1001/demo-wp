"use strict";

// メインビュー
var swipeOption = {
  loop: true,
  slidesPerView: 1,
  loopedSlides: 3,
  effect: "fade",
  simulateTouch: false,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  speed: 2000
};
new Swiper(".p-mv__container", swipeOption); // 制作実績

var swiper = new Swiper(".p-top-work__slider", {
  // スライドメニューの表示方法
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  autoplay: {
    delay: 4000
  },
  speed: 1000,
  // スライドのページネーション表示
  pagination: {
    el: ".p-top-work__pagination",
    clickable: true
  }
});