/*=========================================================================================
    File Name: copy-to-clipboard.js
    Description: Copy to clipboard
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: RootSystem
    Author URL: http://www.themeforest.net/user/RootSystem
==========================================================================================*/

var userText = $("#copy-to-clipboard-input");
var btnCopy = $("#btn-copy");

// copy text on click
btnCopy.on("click", function () {
  userText.select();
  document.execCommand("copy");
})
