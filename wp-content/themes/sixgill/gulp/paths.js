/**
 *
 */

var pagesList = [
  'general',
  'menu',
  'footer',
  'blog',
  'company',
  'home',
  'solutions',
  'resources',
  'tech',
  'press',
  'legal',
  'products'
];

exports.path = {
    base: {
        wrapper: null,
        values: [
            "./css/google_fonts.css",
            "./css/bootstrap.min.css",
            "./css/owl.carousel.css",
            "./css/owl.theme.css",
            "./css/owl.transition.css",
            "./style.css",
            "./css/font-icons.css",
            "./css/animate.css",
            "./css/magnific-popup.css",
            "./css/responsive.css",
            "./css/jquery.fullpage.min.css",
            "./css/colors.css",
            "./css/custom.css",
        ]
    },
    all: {
        wrapper: null,
        values: []
    },
    desktop: {
        wrapper: "@media only screen and (min-width: 1201px) {",
        values: []
    },
    tablet: {
        wrapper: "@media (min-width: 500px) and (max-width: 1200px) and (max-aspect-ratio: 4/3), (min-width: 1001px)" +
        " and (max-width: 1200px) {",
        values: []
    },
    mobile_portrait: {
        wrapper: "@media (max-width: 500px) and (max-aspect-ratio: 4/3) {",
        values: []
    },
    mobile_landscape: {
        wrapper: "@media (max-width: 1000px) and (min-aspect-ratio: 4/3) {",
        values: []
    },
    mobile_portrait_landscape: {
        wrapper: "@media (max-width: 1000px) and (min-aspect-ratio: 4/3), (max-width: 500px) and " +
        "(max-aspect-ratio: 4/3) {",
        values: []
    },
    tablet_and_mobile: {
        wrapper: "@media (max-width: 1200px) {",
        values: [
            "./css/less_compiled/tablet_and_mobile.css",
        ]
    },
    tail_styles: {
        wrapper: null,
        values: [
            "./css/less_compiled/custom_resolutions.css",
            "./css/less_compiled/atomic.css",
        ]
    },
    builds: {
        wrapper: null,
        values: [
            './build/base.css',
            './build/all.css',
            './build/desktop.css',
            './build/tablet.css',
            './build/mobile_portrait.css',
            './build/mobile_landscape.css',
            './build/mobile_portrait_landscape.css',
            './build/tablet_and_mobile.css',
            './build/tail_styles.css',
        ]
    },
    less: {
      source: './less/*.less',
      dest: './css/less_compiled/'
    },
    watcher: {
      styles: [
        './less/*.less',
        './css/*.css',
        './style.css'
      ],
      scripts: './js/**/*.js'
    }
    // Add new exports
    // all: {
    //     wrapper: null,
    //     values: [
    //
    //     ]
    // },
}

pagesList.forEach(function(pageName) {
  exports.path.all.values.push('./css/less_compiled/all_' + pageName + '.css');
  exports.path.desktop.values.push('./css/less_compiled/desktop_' + pageName + '.css');
  exports.path.tablet.values.push('./css/less_compiled/tablet_' + pageName + '.css');
  exports.path.mobile_portrait.values.push('./css/less_compiled/mobile_portrait_' + pageName + '.css');
  exports.path.mobile_landscape.values.push('./css/less_compiled/mobile_landscape_' + pageName + '.css');
  exports.path.mobile_portrait_landscape.values.push('./css/less_compiled/mobile_portrait_landscape_' + pageName + '.css');
})
