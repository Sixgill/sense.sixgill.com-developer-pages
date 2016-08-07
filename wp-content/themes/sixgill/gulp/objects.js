
module.exports = function(gulpComponents) {

  var path = gulpComponents.paths;

    return [
        {
          name: 'base',
          wrapper: paths.base.wrapper,
          style_list: path.base.values
        },
        {
          name: 'all',
          wrapper: path.all.wrapper,
          style_list: path.all.values
        },
        {
          name: 'desktop',
          wrapper: paths.desktop.wrapper,
          style_list: path.desktop.values
        },
        {
          name: 'tablet',
          wrapper: paths.tablet.wrapper,
          style_list: path.tablet.values
        },
        {
          name: 'mobile_portrait',
          wrapper: paths.mobile_portrait.wrapper,
          style_list: path.mobile_portrait.values,
        },
        {
          name: 'mobile_landscape',
          wrapper: paths.mobile_landscape.wrapper,
          style_list: path.mobile_landscape.values
        },
        {
          name: 'mobile_portrait_landscape',
          wrapper: paths.mobile_portrait_landscape.wrapper,
          style_list: path.mobile_portrait_landscape.values
        },
        {
          name: 'tablet_and_mobile',
          wrapper: paths.tablet_and_mobile.wrapper,
          style_list: path.tablet_and_mobile.values
        },
        {
          name: 'tail_styles',
          wrapper: path.tail_styles.wrapper,
          style_list: path.tail_styles.values
        }
    ];
}
