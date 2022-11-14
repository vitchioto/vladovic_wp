(function ($) {
  /* Contact modal functionality */

  const closeModal = () => {
    $('.modal').fadeOut(200, () => {
      $('.contact__header, .contact__form').show();
      $('.wpcf7-response-output').hide();
      $('.wpcf7-form')[0].reset();
      $('body').css({overflow: 'unset'});
    });
  }

  $('.button--contact').click(() => {
    $('body').css({overflow: 'hidden'});
    $('.modal').fadeIn(200);
  });

  $('.modal-close').click(() => {
    closeModal();
  });

  const closeConsentBox = () => {
    $('.consent').fadeOut(200);
  }

  $('.wpcf7').on('wpcf7invalid', () => {
    $('.wpcf7-response-output').show();
  });

  $('.wpcf7').on('wpcf7mailsent', () => {
    $('.modal__inner').fadeOut(200, () => {
      $('.contact__header, .contact__form').hide();
      $('.wpcf7-response-output').show();
      $('.modal__inner').fadeIn(200);
      setTimeout(() => {
        closeModal();
      }, 3200);
    });
  });

  /* Consent functionality */

  $('.consent__button--decline').click(() => {
    closeConsentBox();
  });

  $('.consent__button--accept').click(() => {
    gtag('consent', 'update', {
      'ad_storage': 'granted',
      'analytics_storage': 'granted',
    });

    localStorage['cookie_consent'] = true;
    closeConsentBox();
  });

  if (!localStorage['cookie_consent']) {
      $('.consent').fadeIn(200);
  }

  /* Copy-to-clipboard functionality */

  $('.icon-copy').click(async () => {
    try {
      await navigator.clipboard.writeText('vladimir@vladovic.com');
      $('.icon-copy').addClass('icon-copy--highlight');
      setTimeout(() => {
        $('.icon-copy').removeClass('icon-copy--highlight');
      }, '1500')
    } catch (err) {
      console.error('Failed to copy: ', err);
    }
  });
})(jQuery);
