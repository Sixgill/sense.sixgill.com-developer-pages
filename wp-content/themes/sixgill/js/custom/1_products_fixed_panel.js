jQuery(function($) {

	var thirdSectionVisible = false,
			fourthSectionVisible = false,
			fifthSectionVisible = false,
			thirdSection = $('#products-third-section'),
			fourthSection = $('#products-fourth-section'),
			fifthSection = $('#products-fifth-section');

  var panelDOMLink = $('#products-fixed-panel'),
      fixedPanelCols = $('.products-fixed-panel-col'),
      sectionLinkAttrName = 'data-section-link';


	function checkPanelHighlighting(currentSectionLink) {
		if(fifthSectionVisible) {
			thirdSection.removeClass('selected');
			fourthSection.removeClass('selected');
			fifthSection.addClass('selected');
		} else if(fourthSectionVisible) {
			thirdSection.removeClass('selected');
			fourthSection.addClass('selected');
			fifthSection.removeClass('selected');
		} else if (thirdSectionVisible) {
			thirdSection.addClass('selected');
			fourthSection.removeClass('selected');
			fifthSection.removeClass('selected');
		}
	}

  fixedPanelCols.click(function() {
    var currentSectionLink = $(this).attr(sectionLinkAttrName);
    if(window.screenType == 'tablet') {
      $('html, body').animate({
          scrollTop: $(currentSectionLink).offset().top - 121
      }, 1000);
    } else {

      $('html, body').animate({
          scrollTop: $(currentSectionLink).offset().top
      }, 1000);
    }
  });

  var isPanelVisible = false;

  if(window.screenType != 'desktop') {
    panelDOMLink.removeClass('hide');
		panelDOMLink.css('opacity', '1');
		isPanelVisible = true;
  }



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
        panelDOMLink.animate({opacity: 0}, 500, 'swing', function() {
          panelDOMLink.addClass('hide');
        });
      }
    } else {
      if(thirdSectionVisible || fourthSectionVisible || fifthSectionVisible) {
				isPanelVisible = true;
        panelDOMLink.removeClass('hide');
        panelDOMLink.animate({opacity: 1}, 500);
      }
    }
  }

	setTimeout(function() {
		checkPanelVisibility();
	}, 1000);

});
