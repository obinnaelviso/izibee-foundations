// START OWL CAROUSEL

$(document).ready(function () {
  // HERO SLIDER
  $("#hero-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: true,
    dots: false, // hide the dots
    items: 1, // show only one slide
    smartSpeed: 1000,
    navText: ["PREV", "NEXT"],
    responsive: {
      0: {},
      600: {},
      1000: {},
    },
  });
});

// END OWL CAROUSEL

// START COUNTER UP

$(document).ready(function () {
  $(".count").counterUp({
    delay: 10,
    time: 1200,
  });
});

// END COUNTER UP

// START SLICK CAROUSEL

$(".slider").slick({
  centerMode: true,
  autoplay: true,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 998,
      settings: {
        arrows: false,
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// END SLICK CAROUSEL

// START YEAR CHANGER

var year = new Date().getFullYear();
var date = `&#169 ${year}`;
document.querySelector(".year").innerHTML = date;

// END YEAR CHANGER
