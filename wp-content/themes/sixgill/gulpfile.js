

var gulpComponents = {
  autoprefixer: require('gulp-autoprefixer'),
  cache: require('gulp-cached'),
  concat: require('gulp-concat'),
  gutil: require('gulp-util'),
  gulp: require('gulp'),
  map: require('map-stream'),
  paths: require('./gulp/paths')(),
  plumber: require('gulp-plumber'),
  pump: require('pump'),
  notify: require('gulp-notify'),
  less: require('gulp-less'),
  runSequence: require('run-sequence'),
  remember: require('gulp-remember'),
  watch: require('gulp-watch'),
  eventStream: require('event-stream'),
  cleanCSS: require('gulp-empty'),
  uglify: require('gulp-empty'),
}

gulpComponents.cssWrappers = require('./gulp/css_wrappers')(gulpComponents);

var gulp = gulpComponents.gulp,
    gutil = gulpComponents.gutil;
    runSequence = gulpComponents.runSequence,
    argv = require('yargs').argv;

if(argv.minify) {
  gutil.log(gutil.colors.green('Fast mode is active: unglifying is supressed'));
  gulpComponents.cleanCSS = require('gulp-clean-css');
  gulpComponents.uglify = require('gulp-uglify');
}

require('./gulp/scripts')(gulpComponents);
require('./gulp/styles')(gulpComponents);
require('./gulp/watcher')(gulpComponents);

gulp.task('default',
  (callback) => runSequence(
      'build',
      'watch',
      callback
  )
);

gulp.task('build',
  (callback) => runSequence(
      ['build_js', 'build_css'],
      callback
  )
);

gulp.task('build_js',
  (callback) => runSequence(
      'wrap_scripts',
      'scripts',
      callback
  )
);

gulp.task('build_css',
  (callback) => runSequence(
      'less',
      'wrap_css',
      'styles',
      callback
  )
);
