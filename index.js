(function ($) {
  $(".button--contact").click(() => {
    $(".modal").removeClass("hide");
  });

  $(".modal-close").click(() => {
    $(".modal").addClass("hide");
  });

  closeConsentBox = () => {
    $( ".consent" ).fadeOut(200);
  }

  $(".consent__button--decline").click(() => {
    closeConsentBox();
  });

  $(".consent__button--accept").click(() => {
    gtag('consent', 'update', {
      'ad_storage': 'granted',
      'analytics_storage': 'granted',
    });

    localStorage['cookie_consent'] = true;
    closeConsentBox();
  });

  if (!localStorage['cookie_consent']) {
      $(".consent").fadeIn(200);
  }

  $(".icon-copy").click(async () => {
    try {
      await navigator.clipboard.writeText("vladovic.vladimir@gmail.com");
      $(".copy-result").fadeIn(200);
      setTimeout(() => {
        $(".copy-result").fadeOut(200);
      }, "1500")
    } catch (err) {
      console.error('Failed to copy: ', err);
    }
  });
})(jQuery);