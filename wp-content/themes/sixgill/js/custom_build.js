jQuery(function($){
	$('input.subscribe-email').focusin(function(){
		$(this).addClass('subscribe-email-focus');
	});

	$('input.subscribe-email').focusout(function(){
		if($(this).val()==='') {
			$(this).removeClass('subscribe-email-focus');
		}
	});
});
jQuery(function() {
	$('.learn-more-link').click(function() {
		$(this).parent().prev().toggle();
		$(this).find('.learn-more-expand-icon, .learn-more-close-icon').toggle();
	});
});
// Device.js
// (c) 2014 Matthew Hudson
// Device.js is freely distributable under the MIT license.
// For all details and documentation:
// http://matthewhudson.me/projects/device.js/

(function() {

  var device,
    previousDevice,
    addClass,
    documentElement,
    find,
    handleOrientation,
    hasClass,
    orientationEvent,
    removeClass,
    userAgent;

  // Save the previous value of the device variable.
  previousDevice = window.device;

  device = {};

  // Add device as a global object.
  window.device = device;

  // The <html> element.
  documentElement = window.document.documentElement;

  // The client user agent string.
  // Lowercase, so we can use the more efficient indexOf(), instead of Regex
  userAgent = window.navigator.userAgent.toLowerCase();

  // Main functions
  // --------------

  device.ios = function () {
    return device.iphone() || device.ipod() || device.ipad();
  };

  device.iphone = function () {
    return !device.windows() && find('iphone');
  };

  device.ipod = function () {
    return find('ipod');
  };

  device.ipad = function () {
    return find('ipad');
  };

  device.android = function () {
    return !device.windows() && find('android');
  };

  device.androidPhone = function () {
    return device.android() && find('mobile');
  };

  device.androidTablet = function () {
    return device.android() && !find('mobile');
  };

  device.blackberry = function () {
    return find('blackberry') || find('bb10') || find('rim');
  };

  device.blackberryPhone = function () {
    return device.blackberry() && !find('tablet');
  };

  device.blackberryTablet = function () {
    return device.blackberry() && find('tablet');
  };

  device.windows = function () {
    return find('windows');
  };

  device.windowsPhone = function () {
    return device.windows() && find('phone');
  };

  device.windowsTablet = function () {
    return device.windows() && (find('touch') && !device.windowsPhone());
  };

  device.fxos = function () {
    return (find('(mobile;') || find('(tablet;')) && find('; rv:');
  };

  device.fxosPhone = function () {
    return device.fxos() && find('mobile');
  };

  device.fxosTablet = function () {
    return device.fxos() && find('tablet');
  };

  device.meego = function () {
    return find('meego');
  };

  device.cordova = function () {
    return window.cordova && location.protocol === 'file:';
  };

  device.nodeWebkit = function () {
    return typeof window.process === 'object';
  };

  device.mobile = function () {
    return device.androidPhone() || device.iphone() || device.ipod() || device.windowsPhone() || device.blackberryPhone() || device.fxosPhone() || device.meego();
  };

  device.tablet = function () {
    return device.ipad() || device.androidTablet() || device.blackberryTablet() || device.windowsTablet() || device.fxosTablet();
  };

  device.desktop = function () {
    return !device.tablet() && !device.mobile();
  };

  device.television = function() {
    var i, tvString;

    television = [
      "googletv",
      "viera",
      "smarttv",
      "internet.tv",
      "netcast",
      "nettv",
      "appletv",
      "boxee",
      "kylo",
      "roku",
      "dlnadoc",
      "roku",
      "pov_tv",
      "hbbtv",
      "ce-html"
    ];

    i = 0;
    while (i < television.length) {
      if (find(television[i])) {
        return true;
      }
      i++;
    }
    return false;
  };

  device.portrait = function () {
    return (window.innerHeight / window.innerWidth) > 1;
  };

  device.landscape = function () {
    return (window.innerHeight / window.innerWidth) < 1;
  };

  // Public Utility Functions
  // ------------------------

  // Run device.js in noConflict mode,
  // returning the device variable to its previous owner.
  device.noConflict = function () {
    window.device = previousDevice;
    return this;
  };

  // Private Utility Functions
  // -------------------------

  // Simple UA string search
  find = function (needle) {
    return userAgent.indexOf(needle) !== -1;
  };

  // Check if documentElement already has a given class.
  hasClass = function (className) {
    var regex;
    regex = new RegExp(className, 'i');
    return documentElement.className.match(regex);
  };

  // Add one or more CSS classes to the <html> element.
  addClass = function (className) {
    var currentClassNames = null;
    if (!hasClass(className)) {
      currentClassNames = documentElement.className.replace(/^\s+|\s+$/g, '');
      documentElement.className = currentClassNames + " " + className;
    }
  };

  // Remove single CSS class from the <html> element.
  removeClass = function (className) {
    if (hasClass(className)) {
      documentElement.className = documentElement.className.replace(" " + className, "");
    }
  };

  // HTML Element Handling
  // ---------------------

  // Insert the appropriate CSS class based on the _user_agent.

  if (device.ios()) {
    if (device.ipad()) {
      addClass("ios ipad tablet");
    } else if (device.iphone()) {
      addClass("ios iphone mobile");
    } else if (device.ipod()) {
      addClass("ios ipod mobile");
    }
  } else if (device.android()) {
    if (device.androidTablet()) {
      addClass("android tablet");
    } else {
      addClass("android mobile");
    }
  } else if (device.blackberry()) {
    if (device.blackberryTablet()) {
      addClass("blackberry tablet");
    } else {
      addClass("blackberry mobile");
    }
  } else if (device.windows()) {
    if (device.windowsTablet()) {
      addClass("windows tablet");
    } else if (device.windowsPhone()) {
      addClass("windows mobile");
    } else {
      addClass("desktop");
    }
  } else if (device.fxos()) {
    if (device.fxosTablet()) {
      addClass("fxos tablet");
    } else {
      addClass("fxos mobile");
    }
  } else if (device.meego()) {
    addClass("meego mobile");
  } else if (device.nodeWebkit()) {
    addClass("node-webkit");
  } else if (device.television()) {
    addClass("television");
  } else if (device.desktop()) {
    addClass("desktop");
  }

  if (device.cordova()) {
    addClass("cordova");
  }

  // Orientation Handling
  // --------------------

  // Handle device orientation changes.
  handleOrientation = function () {
    if (device.landscape()) {
      removeClass("portrait");
      addClass("landscape");
    } else {
      removeClass("landscape");
      addClass("portrait");
    }
    return;
  };

  // Detect whether device supports orientationchange event,
  // otherwise fall back to the resize event.
  if (Object.prototype.hasOwnProperty.call(window, "onorientationchange")) {
    orientationEvent = "orientationchange";
  } else {
    orientationEvent = "resize";
  }

  // Listen for changes in orientation.
  if (window.addEventListener) {
    window.addEventListener(orientationEvent, handleOrientation, false);
  } else if (window.attachEvent) {
    window.attachEvent(orientationEvent, handleOrientation);
  } else {
    window[orientationEvent] = handleOrientation;
  }

  handleOrientation();

  if (typeof define === 'function' && typeof define.amd === 'object' && define.amd) {
    define(function() {
      return device;
    });
  } else if (typeof module !== 'undefined' && module.exports) {
    module.exports = device;
  } else {
    window.device = device;
  }

}).call(this);
jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	var submittedFlag = false;
	var successFlag = false;

	function watchSuccess() {
		if(successFlag) return;
		if(jQuery('p.yikes-easy-mc-success-message').length) {
			$('button.close').trigger('click');
			window.open(window.currentDownloadLink, "_self");
			successFlag = true;
		}
		setTimeout(watchSuccess, 500);
	}

	$('.yikes-easy-mc-form').on('submit', function() {
		if(submittedFlag) return;
 		submittedFlag = true;
		watchSuccess();
	});
});
(function(d,s,i,r) {
	if (d.getElementById(i)){return;}
	var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
	n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/1792815.js';
	e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);
jQuery(function($) {
	$(document).ready(function () {
		$(document).on("scroll", onScroll);

		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");

			$('a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');

			var target = this.hash;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top+2
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});
		
		if(device.tablet()) {
			$('body').removeClass('no-touch');
		}

	});


	function onScroll(event){
		var windowPos = $(window).scrollTop();
		$('.my_subMenus > a').each(function(index, item) {
			var currentLink = $(this);
			if ($(currentLink.attr("href")).length > 0) {
				var refElement = $(currentLink.attr("href"));
				if (refElement.position().top <= windowPos && (refElement.position().top + refElement.height() + $("#primary-navwrapper").height() ) > windowPos) {
					$('.my_subMenus > a').removeClass("active");
					currentLink.addClass("active");
				} else{
					//currentLink.removeClass("current");
				}
			}
		});
	}
});
jQuery(function($) {
	window.menuShowFlag = false;
	var savedScroll;

	$('#primary-menu-trigger,#overlay-menu-close').click(function() {
		if(window.menuShowFlag) {
			$( '#menu-background' ).fadeTo(500, 0, function() {
				$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			});
			$( '#primary-menu' ).fadeTo(400, 0, function() {
				$(window).scrollTop(savedScroll);
			});
		} else {
			savedScroll = $(window).scrollTop();
			$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			$( '#primary-menu, #menu-background' ).fadeTo(500, 1);
		}
		$('#mobile-table-search').toggleClass("show");

		window.menuShowFlag = !window.menuShowFlag;

		$('section').toggleClass('hide-landscape-mobile');
		$('footer').toggleClass('hide-landscape-mobile');

		$( '#show-menu-icon, #close-menu-icon' ).toggleClass("hide");
		return false;
	});
});
jQuery(function($) {
	if(!$('#sidebar-floating').length) return;
	var fixedFlag = false;
	var sidebarFloating = $('#sidebar-floating');
	var sidebarFixed = $('#sidebar-fixed');
	var contentDiv = $('#press-text-post');
	var sidebarHeight = sidebarFloating.height();
	var contentScrollHeight = contentDiv.offset().top + contentDiv.height();
	var hist = 0;
	var searchFormCorrection = $('#search-form-desktop').height();

	function hideSidebar(sidebar) {
		sidebar.css('opacity', 0);
		sidebar.css('z-index', -1);
	}

	function showSidebar(sidebar) {
		sidebar.css('opacity', 1);
		sidebar.css('z-index', 100);
	}

	function checkSidebar() {
		console.log('check');
		// Check sidebar offset
		var contentDivLeftOffset = contentDiv.offset().left;
		var contentDivParentLeftOffset = contentDiv.parent().parent().offset().left;
		var sidebarWidth = sidebarFloating.width();

		var fixedSidebarTopOffset = contentDiv.offset().top + contentDiv.height() - sidebarFixed.height() - hist;
		var leftSpace = contentDivLeftOffset - contentDivParentLeftOffset;
		var leftPos = (leftSpace - sidebarWidth)/2;
		var fixedLeftPos = 0 - leftSpace + leftPos + parseInt(contentDiv.parent().css('padding-left').replace("px", ""));

		sidebarFloating.css('left', leftPos+contentDivParentLeftOffset);
		sidebarFixed.css('left', fixedLeftPos);
		sidebarFixed.css('top', fixedSidebarTopOffset);
		var floatingSidebarTopOffset = sidebarFloating.offset().top - searchFormCorrection;
		if(floatingSidebarTopOffset > fixedSidebarTopOffset) {
			console.log('bottom');
			hideSidebar(sidebarFloating);
			showSidebar(sidebarFixed);
		} else if(floatingSidebarTopOffset < fixedSidebarTopOffset) {
			console.log('floating');
			hideSidebar(sidebarFixed);
			showSidebar(sidebarFloating);
		}
	}
	checkSidebar();
	$(window).on('scroll', checkSidebar);
	$(window).on('resize', checkSidebar);
});
$(function() {
	var resourcesBlocks = $('.resource-block');

	if(resourcesBlocks.length == 0 || $(window).width()<1000) {
		return;
	}
	var blockHeight = 0;
	var resourceBlockAspectRatio = 1.22;
	// Margin-top/block_height or margin-bottom/block_height ratio
	var resourcesMarginRatio = 0.036;
	var hoverRatio = 1.066;
	var boxShadowSizeRatio = 0.05;
	var boxShadowSize = 0;

	function resizeResourcesContainers() {
		resourcesBlocks.each(function() {
			var blockWidth = $(this).width();
			if (!blockHeight) {
				oldWidth = blockWidth;
				blockHeight = blockWidth * resourceBlockAspectRatio;
				defaultMargin = blockHeight * resourcesMarginRatio;
				boxShadowSize = blockHeight * boxShadowSizeRatio;
			}

			$(this).height(blockHeight);
			$(this).css('margin-top', defaultMargin);
			$(this).css('margin-bottom', defaultMargin);
		});
	}

	resourcesBlocks.mouseenter(function() {
		$(this).css('box-shadow', '0px 0px '+boxShadowSize+'px #c1c1c1')
	});

	resourcesBlocks.mouseleave(function() {
		$(this).css('box-shadow', 'none');
	});

	function recalcResourcesBlocksSizes() {
		blockHeight = 0;
		resizeResourcesContainers();
	}

	function timeoutResizeCheck() {
		console.log('timeoutResizeCheck');
		recalcResourcesBlocksSizes();
		setTimeout(timeoutResizeCheck, 3000);
	}

	setTimeout(timeoutResizeCheck, 1000);

	$(window).on('resize', function() {
		console.log('resize');
		recalcResourcesBlocksSizes();
	});

	$(window).on('orientationchange', function() {
		console.log('orientationchange');
		setTimeout(recalcResourcesBlocksSizes, 1000);
	});

	resizeResourcesContainers();
});
jQuery(function($) {
	$(window).resize(function() {
		if(window.menuShowFlag && $(window).width()>1000) {
			$('#primary-menu-trigger').trigger('click');
		}

		if($(window).width()>998) {
			$('#primary-menu').css('opacity', '1');
		}

	});
});
jQuery(function($) {
	$('ul:not([class]) li:has(span)').each(function() {
		var biggestFontsize = 0;
		$(this).addClass('has-span');
		$(this).children().each(function() {
			var currentFontsize = $(this).css('font-size').replace(/\D/g,'');
			if(currentFontsize > biggestFontsize && currentFontsize < 100) {
				biggestFontsize = currentFontsize;
			}
			$(this).html('<span class="bullet-color">•</span> '+$(this).html());
		});
		$(this).css('margin-bottom', (biggestFontsize/2)+'px');
	});
});
