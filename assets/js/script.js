$(document).ready(function () {
  $(".project-slider").each(function (index, element) {
    const $carousel = $(element).find(".project-images");
    const $current = $(element).find(".pcn-current");
    const $total = $(element).find(".pcn-total");
    const $prev = $(element).find(".ps-arrow-prev");
    const $next = $(element).find(".ps-arrow-next");

    $carousel.owlCarousel({
      items: 1,
      loop: false,
      nav: false,
      dots: false,
      margin: 10,
      onInitialized: function (event) {
        const count = event.item.count;
        const index = event.item.index;

        $total.text(count.toString().padStart(2, "0"));
        $current.text((index + 1).toString().padStart(2, "0"));

        // Set initial arrow state
        if (index === 0) $prev.addClass("disabled");
        if (index === count - 1) $next.addClass("disabled");
      },
      onChanged: function (event) {
        const index = event.item.index;
        const count = event.item.count;

        $current.text((index + 1).toString().padStart(2, "0"));

        // Update arrow state
        if (index === 0) {
          $prev.addClass("disabled");
        } else {
          $prev.removeClass("disabled");
        }

        if (index === count - 1) {
          $next.addClass("disabled");
        } else {
          $next.removeClass("disabled");
        }
      },
    });

    // Custom arrows
    $prev.click(function () {
      if (!$prev.hasClass("disabled")) {
        $carousel.trigger("prev.owl.carousel");
      }
    });

    $next.click(function () {
      if (!$next.hasClass("disabled")) {
        $carousel.trigger("next.owl.carousel");
      }
    });
  });

  $(".testimonials-slider").each(function () {
    const $slider = $(this);
    const $prev = $slider.closest(".d-flex.flex-column").find(".ts-arrow-prev");
    const $next = $slider.closest(".d-flex.flex-column").find(".ts-arrow-next");

    $slider.owlCarousel({
      items: 1,
      margin: 10,
      loop: false,
      nav: false,
      dots: false,
      responsive: {
        768: { items: 2 },
        1200: { items: 3 },
      },
      onInitialized: toggleArrows,
      onChanged: toggleArrows,
    });

    function toggleArrows(event) {
      const index = event.item.index;
      const count = event.item.count;

      if (index === 0) {
        $prev.addClass("disabled");
      } else {
        $prev.removeClass("disabled");
      }
      if (index + event.page.size >= count) {
        $next.addClass("disabled");
      } else {
        $next.removeClass("disabled");
      }
    }

    $prev.on("click", function () {
      $slider.trigger("prev.owl.carousel");
    });
    $next.on("click", function () {
      $slider.trigger("next.owl.carousel");
    });
  });

  $(".island-slider").each(function () {
    const $slider = $(this);

    $slider.owlCarousel({
      items: 1,
      margin: 10,
      loop: false,
      autoplay: true,
      nav: false,
      dots: false,
      responsive: {
        768: { items: 2 },
        992: { items: 3 },
        1200: { items: 4 },
      },
    });
  });

  $(".portfolio-slider").slick({
    variableWidth: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    infinite: true, // ⛔ no looping
    arrows: true,
    prevArrow: $(".portfolio-slider-arrows .ps-arrow-prev"),
    nextArrow: $(".portfolio-slider-arrows .ps-arrow-next"),
    responsive: [
      { breakpoint: 576, settings: { variableWidth: false, slidesToShow: 1 } },
    ],
  });
});

(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
