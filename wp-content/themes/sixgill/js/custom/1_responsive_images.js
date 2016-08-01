jQuery(function($){
  var responsiveImages = [],
      responsiveBackgrounds = [],
      desktopSrcAttrName = 'desktop-src',
      tabletSrcAttrName = 'tablet-src',
      mobileSrcAttrName = 'mobile-src',
      mobilePortraitSrcAttrName = 'mobile-portrait-src',
      mobileLandscapeSrcAttrName = 'mobile-landscape-src';

  function ResponsiveImage(nodeLink) {
    var DOMLink = $(nodeLink),
        desktopSrc =  $(nodeLink).attr(desktopSrcAttrName),
        tabletSrc = $(nodeLink).attr(tabletSrcAttrName),
        mobileSrc = $(nodeLink).attr(mobileSrcAttrName),
        mobilePortraitSrc = $(nodeLink).attr(mobilePortraitSrcAttrName),
        mobileLandscapeSrc = $(nodeLink).attr(mobileLandscapeSrcAttrName);

    if(mobileSrc) {
      if(!mobilePortraitSrc) {
          mobilePortraitSrc = mobileSrc;
      }
      if(!mobileLandscapeSrc) {
          mobileLandscapeSrc = mobileSrc;
      }
    }

    this.DOMLink = DOMLink;
    this.sources = {
      'desktop': desktopSrc,
      'tablet': tabletSrc,
      'mobile-portrait': mobilePortraitSrc,
      'mobile-landscape': mobileLandscapeSrc
    }
  }

  $('.responsive-image').each(function(){
      responsiveImages.push(new ResponsiveImage(this));
  });

  $('.responsive-background').each(function(){
    responsiveBackgrounds.push(new ResponsiveImage(this));
  });

  window.onScreenTypeChanged(function(newScreenTypeName) {
    responsiveImages.forEach(function(responsiveImage) {
      if(responsiveImage.sources[newScreenTypeName]) {
        responsiveImage.DOMLink.css('display', 'inline-block');
        responsiveImage.DOMLink.attr('src', responsiveImage.sources[newScreenTypeName]);
      } else {
        responsiveImage.DOMLink.css('display', 'none');
      }
    });

    responsiveBackgrounds.forEach(function(responsiveBackground) {
      
    })
  });
});
