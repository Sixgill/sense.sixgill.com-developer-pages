jQuery(function($){
  var responsiveImages = [],
      desktopSrcAttrName = 'desktop-src',
      tabletSrcAttrName = 'tablet-src',
      mobileSrcAttrName = 'mobile-src',
      mobilePortraitSrcAttrName = 'mobile-portrait-src',
      mobileLandscapeSrcAttrName = 'mobile-landscape-src';

  function ResponsiveImage(DOMLink, desktopSrc, tabletSrc, mobileSrc, mobilePortraitSrc, mobileLandscapeSrc) {
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
      responsiveImages.push(new ResponsiveImage(
        $(this),
        $(this).attr(desktopSrcAttrName),
        $(this).attr(tabletSrcAttrName),
        $(this).attr(mobileSrcAttrName),
        $(this).attr(mobilePortraitSrcAttrName),
        $(this).attr(mobileLandscapeSrcAttrName)
      ));
  });

  window.onScreenTypeChanged(function(newScreenTypeName) {
    responsiveImages.forEach(function(responsiveImage) {
      responsiveImage.DOMLink.attr('src', responsiveImage.sources[newScreenTypeName]);
    });
  });
});
