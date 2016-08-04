jQuery(function($) {

  var callbacksList = [];

  function scrolledElemInfo(domLink, scrollInCallback, scrollOutCallback) {
    this.domLink = domLink;
    this.scrollInCallback = scrollInCallback;
    this.scrollOutCallback = scrollOutCallback;
    this.isScrolledTo = false;
		checkElemVisibility(this);
  }

  window.onScrolledTo = function (domLink, scrollInCallback, scrollOutCallback) {
    var newElemInfo = new scrolledElemInfo(domLink, scrollInCallback, scrollOutCallback);
    callbacksList.push(newElemInfo);
  }

  function checkElemVisibility(callbackInfo) {
    if(
      $(window).scrollTop()>=callbackInfo.domLink.position().top
      &&
      $(window).scrollTop()<=callbackInfo.domLink.position().top+callbackInfo.domLink.height()+250
    ){
      if(!callbackInfo.isScrolledTo) {
        callbackInfo.scrollInCallback();
        callbackInfo.isScrolledTo = true;
      }
    } else {
      if(callbackInfo.isScrolledTo) {
        callbackInfo.scrollOutCallback();
        callbackInfo.isScrolledTo = false;
      }
    }
  }

  $(window).on('scroll', function() {
    callbacksList.forEach(function(callbackInfo) {
      checkElemVisibility(callbackInfo);
    });
  });

});
