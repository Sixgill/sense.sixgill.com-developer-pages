var gulp = require('gulp'),
  concat = require('gulp-concat')
  uglify = require('gulp-uglify');
  watch = require('gulp-watch');
  livereload = require('gulp-livereload');
  gutil = require('gulp-util')
  sourcemaps = require('gulp-sourcemaps');
  cleanCSS = require('gulp-clean-css');
  map = require('map-stream');



var base_wrapper = null
var base = [
  "./css/custom/fonts.css",
  "./css/bootstrap.min.css",
  "./css/owl.carousel.css",
  "./css/owl.theme.css",
  "./css/owl.transition.css",
  "./style.css",
  "./css/swiper.css",
  "./css/font-icons.css",
  "./css/animate.css",
  "./css/magnific-popup.css",
  "./css/responsive.css",
  "./css/jquery.fullpage.min.css",
  "./css/colors.css",
  "./css/custom.css",
]

var all_wrapper = null
var all = [
  "./css/custom/all_general.css",
  "./css/custom/all_menu.css",
  "./css/custom/all_footer.css",
  "./css/custom/all_blog.css",
  "./css/custom/all_company.css",
  "./css/custom/all_home.css",
  "./css/custom/all_solutions.css",
  "./css/custom/all_resources.css",
  "./css/custom/all_tech.css",
  "./css/custom/all_press.css",
  "./css/custom/all_legal.css",
  "./css/custom/all_products.css",
]

var desktop_wrapper = "@media only screen and (min-width: 1201px) {"
var desktop = [
  "./css/custom/desktop_general.css",
  "./css/custom/desktop_menu.css",
  "./css/custom/desktop_footer.css",
  "./css/custom/desktop_blog.css",
  "./css/custom/desktop_company.css",
  "./css/custom/desktop_home.css",
  "./css/custom/desktop_solutions.css",
  "./css/custom/desktop_resources.css",
  "./css/custom/desktop_tech.css",
  "./css/custom/desktop_press.css",
  "./css/custom/desktop_legal.css",
  "./css/custom/desktop_products.css",
]

var tablet_wrapper = "@media (min-width: 500px) and (max-width: 1200px) and (max-aspect-ratio: 4/3), (min-width: 1001px) and (max-width: 1200px) {"
var tablet = [
  "./css/custom/tablet_general.css",
  "./css/custom/tablet_menu.css",
  "./css/custom/tablet_footer.css",
  "./css/custom/tablet_blog.css",
  "./css/custom/tablet_company.css",
  "./css/custom/tablet_home.css",
  "./css/custom/tablet_solutions.css",
  "./css/custom/tablet_resources.css",
  "./css/custom/tablet_tech.css",
  "./css/custom/tablet_press.css",
  "./css/custom/tablet_legal.css",
  "./css/custom/tablet_products.css",
]

var mobile_portrait_wrapper = "@media (max-width: 500px) and (max-aspect-ratio: 4/3) {"
var mobile_portrait = [
  "./css/custom/mobile_portrait_general.css",
  "./css/custom/mobile_portrait_menu.css",
  "./css/custom/mobile_portrait_footer.css",
  "./css/custom/mobile_portrait_blog.css",
  "./css/custom/mobile_portrait_company.css",
  "./css/custom/mobile_portrait_home.css",
  "./css/custom/mobile_portrait_solutions.css",
  "./css/custom/mobile_portrait_resources.css",
  "./css/custom/mobile_portrait_tech.css",
  "./css/custom/mobile_portrait_press.css",
  "./css/custom/mobile_portrait_legal.css",
  "./css/custom/mobile_portrait_products.css",
]

var mobile_landscape_wrapper = "@media (max-width: 1000px) and (min-aspect-ratio: 4/3) {"
var mobile_landscape = [
  "./css/custom/mobile_landscape_general.css",
  "./css/custom/mobile_landscape_menu.css",
  "./css/custom/mobile_landscape_footer.css",
  "./css/custom/mobile_landscape_blog.css",
  "./css/custom/mobile_landscape_company.css",
  "./css/custom/mobile_landscape_home.css",
  "./css/custom/mobile_landscape_solutions.css",
  "./css/custom/mobile_landscape_resources.css",
  "./css/custom/mobile_landscape_tech.css",
  "./css/custom/mobile_landscape_press.css",
  "./css/custom/mobile_landscape_legal.css",
  "./css/custom/mobile_landscape_products.css",
]

var mobile_portrait_landscape_wrapper = "@media (max-width: 1000px) and (min-aspect-ratio: 4/3), (max-width: 500px) and (max-aspect-ratio: 4/3) {"
var mobile_portrait_landscape = [
  "./css/custom/mobile_portrait_landscape_general.css",
  "./css/custom/mobile_portrait_landscape_menu.css",
  "./css/custom/mobile_portrait_landscape_footer.css",
  "./css/custom/mobile_portrait_landscape_blog.css",
  "./css/custom/mobile_portrait_landscape_company.css",
  "./css/custom/mobile_portrait_landscape_home.css",
  "./css/custom/mobile_portrait_landscape_solutions.css",
  "./css/custom/mobile_portrait_landscape_resources.css",
  "./css/custom/mobile_portrait_landscape_tech.css",
  "./css/custom/mobile_portrait_landscape_press.css",
  "./css/custom/mobile_portrait_landscape_legal.css",
  "./css/custom/mobile_portrait_landscape_products.css",
]

var tablet_and_mobile_wrapper = "@media (max-width: 1200px) {"
var tablet_and_mobile = [
  "./css/custom/tablet_and_mobile.css",
]



var tail_styles_wrapper = null
var tail_styles = [
  "./css/custom/custom_resolutions.css",
  "./css/custom/atomic.css",
]

var object  = [
  {wrapper: base_wrapper, style_list: base, name: 'base'},
  {wrapper: all_wrapper, style_list: all, name: 'all'},
  {wrapper: desktop_wrapper, style_list: desktop, name: 'desktop'},
  {wrapper: tablet_wrapper, style_list: tablet, name: 'tablet'},
  {wrapper: mobile_portrait_wrapper, style_list: mobile_portrait, name: 'mobile_portrait'},
  {wrapper: mobile_landscape_wrapper, style_list: mobile_landscape, name: 'mobile_landscape'},
  {wrapper: mobile_portrait_landscape_wrapper, style_list: mobile_portrait_landscape, name: 'mobile_portrait_landscape'},
  {wrapper: tablet_and_mobile_wrapper, style_list: tablet_and_mobile, name: 'tablet_and_mobile'},
  {wrapper: tail_styles_wrapper, style_list: tail_styles, name: 'tail_styles'},
]

var builds = [
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

// Custom error handling
function handleError (error) {

  // If you want details of the error in the console
  console.log(error.toString())

  this.emit('end')
}


/******************************
 * Helpers
 * Wrapper for media queries
 *
 ******************************/

// Concatenate js scripts into "./src/custom_build.js"
gulp.task('scripts', function() {
  gutil.log(gutil.colors.green('Concatenate into ./custom_build.js'));
  return gulp.src('./js/**/*.js')
    .pipe(concat('custom_build.js'))
    .pipe(uglify().on('error', handleError))
     .pipe(gulp.dest('./'))
});

gulp.task('styles', function() {
  gutil.log(gutil.colors.green('Concatenate into ./custom_build.css'));  
  return gulp.src(builds)
    .pipe(concat('custom_build.css'))
    .pipe(gulp.dest('./'))
});


gulp.task('wrap_it', function(callback) {
  object.forEach( function (style) {
    if (style.wrapper != null) {
      gulp.src(style.style_list)
        .pipe(concat('./' + style.name + '.css'))
        .pipe(map(function(file, cb) {
              var fileContents = file.contents.toString();
          fileContents = style.wrapper + '\n' + fileContents + '}\n';
            file.contents = new Buffer(fileContents);
              cb(null, file);
          }))
        
        .pipe(gulp.dest('./build'))
    }
      else {
        gutil.log(gutil.colors.red('[Build:] ' + style.name ))
        gulp.src(style.style_list)
        
        .pipe(concat('./' + style.name + '.css'))
        .pipe(gulp.dest('./build'));
      }
  })
  callback();
});


gulp.task('watch', function () {
    livereload.listen();
    gulp.watch('./js/**/*.js', ['build']).on('change', function(file) {
        livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('JS changed' + ' (' + file.path + ')'));
    });

    gulp.watch('./css/**/*.css', ['build']).on('change', function(file) {
        livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
    });
});

var runSequence = require('run-sequence');
var del = require('del');

gulp.task('default')

/******************************
 * Default task
 ******************************/

gulp.task('build', function() {
  runSequence(
    'wrap_it',
    'scripts',
    'styles'
    )
});

gulp.task('clean', function () {
  return del([
    './custom_build.css',
    './custom_build.js',
    'build',
  ]);
});

gulp.task('default', function() {
  runSequence(
    'clean',
    'build',
    'watch'
    )
});
