document.addEventListener("DOMContentLoaded", () => {

  /* ===============================
     HERO SLIDER (EXCEPT DIPLOMA)
  =============================== */
  const sliderEl = document.querySelector(".portfolio-activ:not(.diploma-disabled)");

  if (sliderEl) {
    let allowPageScroll = false;

    const swiper = new Swiper(sliderEl, {
      slidesPerView: 1,
      loop: false,
      speed: 1200,
      parallax: true,

      autoplay: {
        delay: 10000,
        disableOnInteraction: false,
      },

      keyboard: {
        enabled: true,
        onlyInViewport: true,
      },

      navigation: {
        nextEl: ".portfolio__slider__arrow-next",
        prevEl: ".portfolio__slider__arrow-prev",
      },

      pagination: {
        el: ".portfolio-pagination",
        clickable: true,
      },

      on: {
        reachEnd() {
          allowPageScroll = true;
        },
        reachBeginning() {
          allowPageScroll = false;
        }
      }
    });

    window.addEventListener(
      "wheel",
      (e) => {
        const rect = sliderEl.getBoundingClientRect();
        const inView =
          rect.top <= 0 && rect.bottom >= window.innerHeight;

        if (!inView) return;

        if (!allowPageScroll) {
          e.preventDefault();
          e.deltaY > 0 ? swiper.slideNext() : swiper.slidePrev();
        }
      },
      { passive: false }
    );
  }

  /* ===============================
     TOOLS LOGO SLIDER
  =============================== */
  const toolsSlider = document.querySelector(".niit-tools-slider");

  if (toolsSlider) {
    new Swiper(toolsSlider, {
      slidesPerView: "auto",
      spaceBetween: 40,
      loop: true,
      allowTouchMove: false,
      speed: 6000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      freeMode: true,
      freeModeMomentum: false,
    });
  }

  /* ===============================
     FAQ ACCORDION
  =============================== */
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach(item => {
    const button = item.querySelector(".faq-question");

    button.addEventListener("click", () => {
      faqItems.forEach(i => {
        if (i !== item) i.classList.remove("active");
      });
      item.classList.toggle("active");
    });
  });

});
