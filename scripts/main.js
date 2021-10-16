$(document).ready(function () {
  $(".navbar-button").click(function () {
    $(".navbar-button").toggleClass("navbar-button--active");
    $(".container--mobile").toggleClass("container--mobile--visible");
    $(".menu--mobile").toggleClass("menu--mobile--visible");
  });

  // console.log($(".popup"));

  $(".castModal").click(function () {
    openModal();
    // console.log("Modal => opened");
  });

  $(".modal__close, .modal__wrapper").click(function () {
    closeModal();
  });

  $(document).keydown(function (e) {
    if (e.key === "Escape") {
      closeModal();
      closeMobile();
    }
  });

  function closeMobile() {
    $(".navbar-button").removeClass("navbar-button--active");
    $(".container--mobile").removeClass("container--mobile--visible");
    $(".menu--mobile").removeClass("menu--mobile--visible");
  }

  function openModal() {
    closeMobile();
    $(".modal").addClass("modal--active");
  }
  function closeModal() {
    $(".modal").removeClass("modal--active");
  }

  console.log($(".compilation-card__like"));
  $(".compilation-card__like").click(function () {
    $(this).toggleClass("compilation-card__like--clicked");
  });
});

// ("compilation-card__like--clicked");
