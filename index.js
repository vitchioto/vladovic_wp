(function ($) {
  $(".button--contact").click(() => {
    $(".modal").removeClass("hide");
  });

  $(".modal-close").click(() => {
    $(".modal").addClass("hide");
  });
})(jQuery);