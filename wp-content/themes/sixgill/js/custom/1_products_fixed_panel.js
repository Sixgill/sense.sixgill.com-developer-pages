jQuery(function($) {

  var thirdSectionVisible = false,
      fourthSectionVisible = false,
      fifthSectionVisible = false;

  var isPanelVisible = false;

  var panelDOMLink = $('#products-fixed-panel');

  //TODO: use factory pattern

  window.onScrolledTo(
    $('#products-third-section'),

    function() {
      thirdSectionVisible = true;
      checkPanelVisibility();
    },

    function() {
      thirdSectionVisible = false;
      checkPanelVisibility();
    }
  );

  window.onScrolledTo(
    $('#products-fourth-section'),

    function() {
      fourthSectionVisible = true;
      checkPanelVisibility();
    },

    function() {
      fourthSectionVisible = false;
      checkPanelVisibility();
    }
  );

  window.onScrolledTo(
    $('#products-fifth-section'),

    function() {
      fifthhSectionVisible = true;
      checkPanelVisibility();
    },

    function() {
      fifthSectionVisible = false;
      checkPanelVisibility();
    }
  );

  function checkPanelVisibility() {
    if (isPanelVisible) {
      if(!thirdSectionVisible && !fourthSectionVisible && !fifthSectionVisible) {
        panelDOMLink.addClass('hide')
        isPanelVisible = false;
      }
    } else {
      if(thirdSectionVisible || fourthSectionVisible || fifthSectionVisible) {
        panelDOMLink.removeClass('hide')
        isPanelVisible = true;
      }
    }
  }
  
  checkPanelVisibility();
});
