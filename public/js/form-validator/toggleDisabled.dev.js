/**
 * jQuery Form Validator Module: Toggle Disabled
 * ------------------------------------------
 * Created by Victor Jonsson <http://www.victorjonsson.se>
 *
 * This module will take care of disabling/enabling submit buttons
 * in forms, depending on if the inputs of the form is valid or not.
 *
 * @website http://formvalidator.net/
 * @license Dual licensed under the MIT or GPL Version 2 licenses
 * @version 2.2.24
 */
(function($, window) {

  "use strict";

  // Function that can enable/disable form
  var toggleFormState = function($form, state) {
      if( state == 'disabled' ) {
        $form.find('*[type="submit"]')
          .addClass('disabled')
          .attr('disabled', 'disabled');
      } else {
        $form.find('*[type="submit"]')
          .removeClass('disabled')
          .removeAttr('disabled');
      }
    },
    isCheckingIfFormValid = false;

  $(window).bind('validatorsLoaded formValidationSetup', function(evt, $forms, conf) {

      var $formsToDisable = conf.disabledFormFilter ? $forms.filter(conf.disabledFormFilter) : $forms;

      // Toggle form state depending on if it has only valid inputs or not.
      $formsToDisable
        .addClass('disabled-by-default')
        .find('*[data-validation]')
          .attr('data-validation-event','keyup')
          .on('validation', function(evt, valid) {
            if( !isCheckingIfFormValid ) {
              isCheckingIfFormValid = true;
              var $form = $(this).closest('form');
              if( valid && $form.isValid(conf, conf.language, false) ) {
                toggleFormState($form, 'enabled');
              } else {
                toggleFormState($form, 'disabled');
              }
              isCheckingIfFormValid = false;
            }
          });


      // Make all inputs validated on keyup, require validateOnEvent in validation config
      toggleFormState($formsToDisable, 'disabled');

      $formsToDisable.validateOnEvent(conf.language, conf);

  })
  .on('validationErrorDisplay', function(evt, $input, $elem) {
      if( $input.closest('form').hasClass('disabled-by-default') )
        $elem.hide();
  });

})(jQuery, window);