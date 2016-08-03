jQuery(function($) {

  var callbacksList = [];

  function scrolledElemInfo(domLink, scrollInCallback, scrollOutCallback) {
    this.domLink = domLink;
    this.scrollInCallback = scrollInCallback;
    this.scrollOutCallback = scrollOutCallback;
    this.isScrolledTo = false;
  }

  window.onScrolledTo = function (domLink, scrollInCallback, scrollOutCallback) {
    callbacksList.push(new scrolledElemInfo(domLink, scrollInCallback, scrollOutCallback));
  }

  $(window).on('scroll', function() {
    callbacksList.forEach(function(callbackInfo) {
      if(
        $(this).scrollTop()>=callbackInfo.domLink.position().top
        &&
        $(this).scrollTop()<=callbackInfo.domLink.position().top+callbackInfo.domLink.height()
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
    });
  });
});
