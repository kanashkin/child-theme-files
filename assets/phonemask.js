(function ($) {
  $('input[type="tel"]').mask('+7-(999)-999-9999', {
    placeholder: ' ',
  });
  $(document).on('elementor/popup/show', function (event, id, instance) {
    $('input[type="tel"]').mask('+7(999)-999-9999', {
      placeholder: ' ',
    });
  });
})(jQuery);
