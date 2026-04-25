/* ===========================
   You May Also Like – Swiper Init
   Save as: assets/js/you-may-also-like.js

   Make sure these 2 lines are in your <head> or before this script:
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   =========================== */

const relatedSwiper = new Swiper('.relatedSwiper', {
  loop: true,                  // ✅ infinite loop, no empty space ever
  autoplay: {
    delay: 3500,
    disableOnInteraction: false, // keeps autoplay going after user swipes
    pauseOnMouseEnter: true,     // pauses on hover
  },
  speed: 600,                  // slide transition speed in ms
  grabCursor: true,            // shows grab cursor on desktop
  spaceBetween: 20,            // gap between cards

  // Responsive breakpoints
  breakpoints: {
    0:    { slidesPerView: 1 },
    480:  { slidesPerView: 2 },
    768:  { slidesPerView: 3 },
    1200: { slidesPerView: 4 },
  },

  // Pagination dots
  pagination: {
    el: '.relatedPagination',
    clickable: true,
  },

  // Custom prev/next buttons
  navigation: {
    prevEl: '#relPrev',
    nextEl: '#relNext',
  },
});