jQuery(function($) {

  var panelDOMLink = $('#products-fixed-panel'),
      fixedPanelCols = $('.products-fixed-panel-col'),
      sectionLinkAttrName = 'data-section-link';


    fixedPanelCols.click(function() {
      var currentSectionLink = $(this).attr(sectionLinkAttrName);
      if(window.screenType == 'tablet') {
        $('html, body').animate({
            scrollTop: $().offset().top - 121
        }, 1000);
      } else {
        
        $('html, body').animate({
            scrollTop: $($(this).attr(sectionLinkAttrName)).offset().top
        }, 1000);

        fixedPanelCols.each(function() {
          if($(this).attr(sectionLinkAttrName) == currentSectionLink) {
            $(this).addClass('selected');
          } else {
            $(this).removeClass('selected');
          }
        });
      }
    });

  if(window.screenType != 'desktop') {
    panelDOMLink.removeClass('hide');
  }

  var thirdSectionVisible = false,
      fourthSectionVisible = false,
      fifthSectionVisible = false;

  var isPanelVisible = false;

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
    if(window.screenType != 'desktop') {
      return;
    }
    if (isPanelVisible) {
      if(!thirdSectionVisible && !fourthSectionVisible && !fifthSectionVisible) {
        isPanelVisible = false;
        panelDOMLink.fadeTo(500, 0, function() {
          panelDOMLink.addClass('hide');
        });
      }
    } else {
      if(thirdSectionVisible || fourthSectionVisible || fifthSectionVisible) {
        panelDOMLink.removeClass('hide');
        isPanelVisible = true;
        panelDOMLink.fadeTo(500, 1, function() {
        });
      }
    }
  }

  checkPanelVisibility();
});
