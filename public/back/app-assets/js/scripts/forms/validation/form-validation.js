/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootsreap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: RootSystem
  Author URL: http://www.themeforest.net/user/RootSystem
==========================================================================================*/

(function(window, document, $) {
  'use strict';

  // Input, Select, Textarea validations except submit button
  $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();

})(window, document, jQuery);
