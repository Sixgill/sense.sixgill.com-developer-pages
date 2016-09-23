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
  var panelPlaceholder = $('#products-panel-placeholder');
	if(!panelDOMLink.length) return;
  var topPosition = panelDOMLink.position().top;
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
		} else {
      $('#products-fixed-panel-col-track').removeClass('selected');
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
      $('.js-a-ancillary'),

      function() {
        changePanelVisibility(true);
      },

      function() {
        changePanelVisibility(false);
      }
  );
  window.onScrolledTo(
    $('#products-third-section'),

    function() {
      thirdSectionVisible = true;
      checkPanelHighlighting();
    },

    function() {
      thirdSectionVisible = false;
      checkPanelHighlighting();
    }
  );

  window.onScrolledTo(
    $('#products-fourth-section'),

    function() {
      fourthSectionVisible = true;
      checkPanelHighlighting();
    },

    function() {
      fourthSectionVisible = false;
      checkPanelHighlighting();
    }
  );

  window.onScrolledTo(
    $('#products-fifth-section'),

    function() {
      fifthSectionVisible = true;
      checkPanelHighlighting();
    },

    function() {
      fifthSectionVisible = false;
      checkPanelHighlighting();
    }
  );

  function changePanelPosition(fixed) {
    if(window.screenType != 'desktop') {
      return;
    }
    if(fixed){
      panelDOMLink.addClass('fixed-position');
      panelPlaceholder.removeClass('hide');
    } else {
      panelDOMLink.removeClass('fixed-position');
      panelPlaceholder.addClass('hide');
    }
  }

  function changePanelVisibility(hide) {
    if(window.screenType != 'desktop') {
      return;
    }
    if(hide){
      panelDOMLink.animate({opacity: 0}, 500, 'swing', function() {
        panelDOMLink.addClass('hide');
      });
    } else {
        panelDOMLink.removeClass('hide');
        panelDOMLink.animate({opacity: 1}, 500);
    }
  }


  $(window).on('scroll', function() {
    var startPosition = $('#products-third-section').offset().top - 90;
    if ($(window).scrollTop() >= startPosition) {
       changePanelPosition(true);
    } else {
       changePanelPosition(false);
    }

  });
  $(window).on('resize', function() {
    topPosition = panelDOMLink.position().top;
  });


});
