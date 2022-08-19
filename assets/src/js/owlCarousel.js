$(document).ready(function () {
  $("#owl-clientes").owlCarousel({
    items: 6,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    dots: false,
    responsive: {
      0: {
        items: 3,
      },
      360: {
        items: 3,
      },
      1000: {
        items: 6,
      },
    },
  });
});
