$(document).ready(function () {
  $(".navbar-button").click(function (e) {
    $(".navbar-button__bg").toggleClass("navbar-button__bg--active");
    $(".container--mobile").toggleClass("container--mobile--visible");
    $(".menu--mobile").toggleClass("menu--mobile--visible");
  });
});
