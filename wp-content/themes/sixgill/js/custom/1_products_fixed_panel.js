$(function() {

	var thirdSectionVisible = false,
			fourthSectionVisible = false,
			fifthSectionVisible = false,
			thirdSection = $('#products-third-section'),
			fourthSection = $('#products-fourth-section'),
			fifthSection = $('#products-fifth-section');

  var panelDOMLink = $('#products-fixed-panel'),
      fixedPanelCols = $('.products-fixed-panel-col'),
      sectionLinkAttrName = 'data-section-link';

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

	if(screenType != 'desktop') {
		panelDOMLink.removeClass('hide');
		panelDOMLink.animate({opacity: 1}, 500);
		return;
	}

	function checkPanelHighlighting(currentSectionLink) {
		if(fifthSectionVisible) {
			$('#products-fixed-panel-col-track').removeClass('selected');
			$('#products-fixed-panel-col-determine').removeClass('selected');
			$('#products-fixed-panel-col-act').addClass('selected');
		} else if(fourthSectionVisible) {
			$('#products-fixed-panel-col-track').removeClass('selected');
			$('#products-fixed-panel-col-determine').addClass('selected');
			$('#products-fixed-panel-col-act').removeClass('selected');
		} else if (thirdSectionVisible) {
			$('#products-fixed-panel-col-track').addClass('selected');
			$('#products-fixed-panel-col-determine').removeClass('selected');
			$('#products-fixed-panel-col-act').removeClass('selected');
		}
	}



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
      fifthSectionVisible = true;
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

  $(window).on('scroll', function() {
    checkPanelHighlighting();
  });


});
