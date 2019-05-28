export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').on('click', function () {
      $('.hamburger__bars').toggleClass('open');
      $('body').toggleClass('open');
    });

    $('.mobile-menu__item--parent > a').on('click', function ( event ) {
      event.preventDefault();
      $(this).parent().toggleClass('open');
    });

    $('.slider').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
