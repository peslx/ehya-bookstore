$(document).ready(function () {
  // Кнопка прокрутки
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      // при прокрутке страницы на 150 пикселей вниз
      $(".scroll-top").fadeIn(); // отображаем кнопку
    } else {
      $(".scroll-top").fadeOut(); // в противном случае скрываем
    }
  });

  $(".scroll-top").click(function (e) {
    $("html, body").animate({ scrollTop: 0 }, 800);
    e.preventDefault();
  });

  // Функция  открыть мобильное меню кликом по кнопке "бургер"
  $(".navbar-button").click(function () {
    $(".navbar-button").toggleClass("navbar-button--active");
    $(".container--mobile").toggleClass("container--mobile--visible");
    $(".menu--mobile").toggleClass("menu--mobile--visible");
  });

  // Функция открыть модальное окно кликом по кнопке
  $(".castModal").click(function () {
    openModal();
    // console.log("Modal => opened");
  });

  // Функция  закрыть модальное окно кликом в пустоту
  $(".modal__close, .modal__wrapper").click(function () {
    closeModal();
  });

  // Функция  закрыть мобильное меню кликом в пустоту
  $(".container--mobile").click(function (e) {
    // console.log(e.target.id);
    if (e.target.id == "menu") {
      return;
    } else {
      closeMobile();
    }
  });

  // Функция  закрыть мобильное меню с клавиши Esc
  $(document).keydown(function (e) {
    if (e.key === "Escape") {
      closeModal();
      closeMobile();
    }
  });

  // Функция  закрыть мобильное меню
  function closeMobile() {
    $(".navbar-button").removeClass("navbar-button--active");
    $(".container--mobile").removeClass("container--mobile--visible");
    $(".menu--mobile").removeClass("menu--mobile--visible");
  }

  // Функции открыть закрыть модальное окно
  function openModal() {
    closeMobile();
    $(".modal").addClass("modal--active");
  }
  function closeModal() {
    $(".modal").removeClass("modal--active");
  }

  // Добавление в избраннгое (поставить лайк- анимация)
  $(".compilation-card__like").click(function () {
    $(this).toggleClass("compilation-card__like--clicked");
  });

  // Активация слайдера в секции "Категории"
  let categoriesSlider = new Swiper(".categories-slider", {
    // Optional parameters
    direction: "horizontal",
    loop: false,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 10,
        grid: {
          fill: "column",
          rows: 2,
        },
      },
      // when window width is >= 576px
      576: {
        slidesPerView: 2,
        spaceBetween: 30,
        grid: {
          fill: "column",
          rows: 2,
        },
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 4,
        spaceBetween: 16,
        grid: {
          fill: "row",
          rows: 1,
        },
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      // when window width is >= 1200px
      1200: {
        slidesPerView: 4,
        spaceBetween: 26,
      },
    },

    // Navigation arrows
    navigation: {
      nextEl: ".categories-button--next",
      prevEl: ".categories-button--prev",
      disabledClass: "categories-button--disabled",
    },
  });

  // Активация слайдера в секции "Категории"
  let unreleasedSlider = new Swiper(".unreleased-slider", {
    // Optional parameters
    direction: "horizontal",
    loop: false,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 576px
      576: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      // when window width is >= 992px
      992: {
        // slidesPerView: 4,
        // spaceBetween: 30,
      },
      // when window width is >= 1200px
      1200: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
    },
    // Navigation arrows
    navigation: {
      nextEl: ".unreleased-button--next",
      prevEl: ".unreleased-button--prev",
      disabledClass: "unreleased-button--disabled",
    },
  });

  $(window).resize(function () {
    categoriesSlider.update();
    unreleasedSlider.update();
  });

  $(".validate-form").each(function () {
    $(this).validate({
      errorClass: "invalid",
      messages: {
        name: {
          required: "Пожалуйста, укажите Ваше имя",
          minlength: "Минимальная длина имени - 2 символа",
        },

        phone: {
          required: "Номер телефона необходим для связи с Вами",
        },

        email: {
          required: "Пожалуйста, укажите E-mail",
          email: "Введите корректный адрес",
        },
      },
    });
  });

  $(".phone").mask("+7 (999) 999-99-99");

  // Плавная прокрутка
  $(function () {
    $(".menu__link[href=#references]").on("click", function (e) {
      $("html,body")
        .stop()
        .animate({ scrollTop: $("#references").offset().top }, 1000);
      e.preventDefault();
    });
    $(".menu__link[href=#unreleased]").on("click", function (e) {
      $("html,body")
        .stop()
        .animate({ scrollTop: $("#unreleased").offset().top }, 1000);
      e.preventDefault();
    });
    $(".menu__link[href=#blog]").on("click", function (e) {
      $("html,body")
        .stop()
        .animate({ scrollTop: $("#blog").offset().top }, 1000);
      e.preventDefault();
    });
  });
});
