$(document).ready(function () {
  $(".navbar-button").click(function () {
    $(".navbar-button__bg").toggleClass("navbar-button__bg--active");
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
    $(".navbar-button__bg").removeClass("navbar-button__bg--active");
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
});
