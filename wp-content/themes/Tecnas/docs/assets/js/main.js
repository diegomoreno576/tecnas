new WOW().init();

function addActiveNavLink() {
  const href = window.location.href;
  const links = $("#navbar .nav-link").get();
  const activeLink = links.find((link) => link.href === href);
  if (activeLink) {
    activeLink.classList.add("active");
  }
}

addActiveNavLink();

$('.dropdown-toggle').hover(function() {
  if ($(this).siblings().hasClass("dropdown-menu")) {
    $(this).siblings().css("display", "block")
  }
}, function() {
  if ($(this).siblings().hasClass("dropdown-menu")) {
    if (!$(this).siblings().is(":hover")) {
      $(this).siblings().css("display", "none")
    }
  }
})

$('.dropdown-menu').hover(function() {
  // 
}, function() {
  $(this).css("display", "none")
})

$(window).on("scroll", () => {
  if ($(this).scrollTop()) {
    $(".js-gotop").fadeIn();
  } else {
    $(".js-gotop").fadeOut();
  }
});

$(".js-gotop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 1000);
});

$(".main-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='assets/img/icons/arrow_left.svg'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='assets/img/icons/arrow_right.svg'></button>",
});

$(".featured-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".clients-slider").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  rows: 2,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
      },
    },
  ],
});

$(".certifications-slider").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
      },
    },
  ],
});
