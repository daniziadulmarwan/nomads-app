$(document).ready(function () {
  // xzoom
  $(".xzoom, .xzoom-gallery").xzoom({
    zoomWidth: 500,
    title: false,
    tint: "#333",
    xoffset: 15,
  });

  // gijgo
  $(".datepicker").datepicker({
    uiLibrary: "bootstrap4",
    icons: {
      rightIcon: '<img src="/frontend/images/ic_doe.png" />',
    },
  });
});
