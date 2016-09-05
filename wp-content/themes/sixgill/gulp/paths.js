
module.exports = () => {

  var paths = {
    base: {
        wrapper: null,
        values: [
            "./css/bootstrap.min.css",
            "./css/owl.carousel.css",
            "./css/owl.theme.css",
            "./css/owl.transition.css",
            "./style.css",
            "./css/font-icons.css",
            "./css/animate.css",
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
        wrapper: "@media only screen and (min-width: 1101px) {",
        values: []
    },
    tablet: {
        wrapper: "@media (min-width: 500px) and (max-width: 1100px) and (max-aspect-ratio: 4/3), (min-width: 1001px)" +
        " and (max-width: 1100px) {",
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
        wrapper: "@media (max-width: 1100px) {",
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
        './less/helpers/*.less',
        './css/*.css',
        './style.css'
      ],
      scripts: './js/**/*.js'
    }
  }

  var pagesList = [
		'general',
		'menu',
		'social_buttons',
		'footer',
		'blog_page',
        'blog_post',
		'blog',
		'blog_post',
		'company',
		'home',
		'solutions',
		'resources',
		'tech',
		'press',
		'legal',
		'products'
  ];

  pagesList.forEach(function(pageName) {
    paths.all.values.push('./css/less_compiled/all_' + pageName + '.css');
    paths.desktop.values.push('./css/less_compiled/desktop_' + pageName + '.css');
    paths.tablet.values.push('./css/less_compiled/tablet_' + pageName + '.css');
    paths.mobile_portrait.values.push('./css/less_compiled/mobile_portrait_' + pageName + '.css');
    paths.mobile_landscape.values.push('./css/less_compiled/mobile_landscape_' + pageName + '.css');
    paths.mobile_portrait_landscape.values.push('./css/less_compiled/mobile_portrait_landscape_' + pageName + '.css');
  });

  return paths;

}
