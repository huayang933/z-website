// Back to Top Js Start
let bodyToTop;
let windowScrollY;

let scrollTopArrow = document.querySelector(".toTop");
if (scrollTopArrow) {
  scrollTopArrow.style.opacity = "0";
  window.addEventListener("scroll", (el) => {
    var windowScrollY = window.scrollY;
    if (windowScrollY > 500) {
      scrollTopArrow.style.opacity = "1";
    } else {
      scrollTopArrow.style.opacity = "0";
    }
  });
  function toTopClick() {
    bodyToTop = window.scrollTo(0, 0);
  }
}

// Spinner Loader Js Start
window.addEventListener("load", function () {
  const loader = document.querySelector(".loader");
  loader.style.transition = "opacity 1.5s ease";
  loader.style.opacity = "0";
  setTimeout(() => {
    loader.style.display = "none";
  }, 1500);
});

if (document.querySelector("header")) {
  function scrolling() {
    var sticky = document.querySelector("header");
    var scroll = window.pageYOffset;

    if (scroll >= 15) sticky.classList.remove("transparent");
    else sticky.classList.add("transparent");
  }
  scrolling();
}
window.addEventListener("scroll", scrolling);
if (document.querySelector(".navbar-toggler")) {
  $(document).ready(function () {
    // Show Navigation Toggle Starts
    $(".navbar-toggler").on("click", () => {
      $("html").toggleClass("show-menu");
    });
    $(".navbar-nav .nav-item > .nav-link.js-scroll-trigger").on("click", () => {
      $("html").removeClass("show-menu");
    });

    // Testimonial // Page 2 Js Start
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 3;
    var syncedSecondary = true;

    sync1
      .owlCarousel({
        items: 1,
        nav: false,
        center: true,
        dots: false,
        loop: true,
        responsiveClass: true,
        responsiveRefreshRate: 200,
      })
      .on("changed.owl.carousel", syncPosition);

    sync2
      .on("initialized.owl.carousel", function () {
        sync2.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
        dots: false,
        nav: true,
        responsiveRefreshRate: 100,
        navText: [
          '<i class="fal fa-long-arrow-alt-left"></i>',
          '<i class="fal fa-long-arrow-alt-right"></i>',
        ],
        autoplay: true, //true if you want enable autoplay
        smartSpeed: 3000,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          576: {
            items: 2,
            margin: 20,
          },
          768: {
            items: 3,
            margin: 20,
          },
          992: {
            items: 3,
            margin: 20,
          },
          1199: {
            items: 3,
            margin: 20,
          },
        },
      })
      .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }

      sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = sync2.find(".owl-item.active").length - 1;
      var start = sync2.find(".owl-item.active").first().index();
      var end = sync2.find(".owl-item.active").last().index();

      if (current > end) {
        sync2.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        sync2.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }

    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        sync1.data("owl.carousel").to(number, 100, true);
      }
    }

    sync2.on("click", ".owl-item", function (e) {
      e.preventDefault();
      var number = $(this).index();
      sync1.data("owl.carousel").to(number, 300, true);
    });
  });
}

// Header Drop-Down Start
if (document.querySelectorAll(".dropdown")) {
  const dropdowns = document.querySelectorAll(".dropdown");
  const showClass = "show";

  window.addEventListener("load", () => {
    dropdowns.forEach((dropdown) => {
      dropdown.addEventListener("mouseenter", () => {
        dropdown.classList.add(showClass);
        dropdown
          .querySelector(".dropdown-toggle")
          .setAttribute("aria-expanded", "true");
        dropdown.querySelector(".dropdown-menu").classList.add(showClass);
      });

      dropdown.addEventListener("mouseleave", () => {
        dropdown.classList.remove(showClass);
        dropdown
          .querySelector(".dropdown-toggle")
          .setAttribute("aria-expanded", "false");
        dropdown.querySelector(".dropdown-menu").classList.remove(showClass);
      });
    });
  });
  window.addEventListener("resize", () => {
    dropdowns.forEach((dropdown) => {
      dropdown.addEventListener("mouseenter", dropdownHover);
      dropdown.addEventListener("mouseleave", dropdownLeave);
    });
  });

  function dropdownHover() {
    this.classList.add(showClass);
    this.querySelector(".dropdown-toggle").setAttribute(
      "aria-expanded",
      "true"
    );
    this.querySelector(".dropdown-menu").classList.add(showClass);
  }

  function dropdownLeave() {
    this.classList.remove(showClass);
    this.querySelector(".dropdown-toggle").setAttribute(
      "aria-expanded",
      "false"
    );
    this.querySelector(".dropdown-menu").classList.remove(showClass);
  }
}

if (document.getElementById("testimonial")) {
  $("#testimonial").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    nav: true,
    rewind: false,
    navContainer: ".slider-nav",
    navText: [
      '<i class="fal fa-long-arrow-alt-left"></i>',
      '<i class="fal fa-long-arrow-alt-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
}
// Blog Page 2 Js Start
if (document.getElementById("bloghome2")) {
  $("#bloghome2").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    nav: true,
    rewind: false,
    navText: [
      '<i class="fal fa-long-arrow-alt-left"></i>',
      '<i class="fal fa-long-arrow-alt-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1600: {
        items: 4,
      },
    },
  });
}

// Screenshot-Carousel Js Start
if (document.querySelector(".screenshort-carousel")) {
  $(".screenshort-carousel").owlCarousel({
    loop: true,
    margin: 30,
    navContainer: ".screenshort-nav",
    navText: [
      '<i class="fal fa-long-arrow-alt-left"></i>',
      '<i class="fal fa-long-arrow-alt-right"></i>',
    ],
    dots: false,
    nav: true,
    responsive: {
      0: {
        items: 3,
        margin: 15,
      },
      414: {
        items: 3,
        margin: 15,
      },
      576: {
        items: 3,
        margin: 15,
      },
      768: {
        items: 3,
        margin: 40,
      },
      992: {
        items: 5,
      },
      1200: {
        items: 5,
      },
      1920: {
        items: 5,
      },
    },
  });
}

// Home 3 Testimonial Js Start
if (document.querySelector(".testimonial3")) {
  $(".testimonial3").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    nav: true,
    rewind: false,
    margin: 15,
    navText: [
      '<i class="fal fa-long-arrow-alt-left"></i>',
      '<i class="fal fa-long-arrow-alt-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
}