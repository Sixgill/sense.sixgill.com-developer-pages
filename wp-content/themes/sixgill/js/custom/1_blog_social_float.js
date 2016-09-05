jQuery(function(){
	if(window.screenType != 'desktop') return;
	if(!$('.blog-post-wrapper').length) return;
	var panel = $('#social-buttons-panel'),
			panelHeight = panel.height(),
  		panelParent = panel.parent(),
      parentOffset = parseInt(panelParent.css('margin-top')),
			parentHeigh = panelParent.height(),
      fixedFlag = false;

  function fixPanel() {
  	panel.css('top', parentOffset);
    panel.addClass('social-buttons-fixed');
  }

  function unfixPanel() {
  	panel.css('top', 0);
    panel.removeClass('social-buttons-fixed');
  }

	function checkPanel() {
  	//Check parent's top
  	var isPanelScrolledBy = panelParent.get(0).getBoundingClientRect().top - parentOffset <= 0,
				isParentScrolledBy = panelParent.get(0).getBoundingClientRect().top - parentOffset + parentHeigh - panelHeight <= 0;
  	if(!fixedFlag && isPanelScrolledBy && !isParentScrolledBy) {
    	fixPanel();
      fixedFlag = true;
    } else if (fixedFlag && (!isPanelScrolledBy || isParentScrolledBy )) {
    	unfixPanel();
      fixedFlag = false;
			if(isPanelScrolledBy) {
				panel.css('top', 'auto');
				panel.css('bottom', '0px');
			}
    }
  }

  $(window).on('scroll', checkPanel);
  $(window).on('resize', checkPanel);
  checkPanel();
});
