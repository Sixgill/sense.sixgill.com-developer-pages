

var gulpComponents = {
  autoprefixer: require('gulp-autoprefixer'),
  cache: require('gulp-cached'),
  concat: require('gulp-concat'),
  cleanCSS: require('gulp-clean-css'),
  gutil: require('gulp-util'),
  gulp: require('gulp'),
  map: require('map-stream'),
  paths: require('./gulp/paths'),
  plumber: require('gulp-plumber'),
  pump: require('pump'),
  notify: require('gulp-notify'),
  less: require('gulp-less'),
  runSequence: require('run-sequence'),
  remember: require('gulp-remember'),
  uglify: require('gulp-uglify'),
  watch: require('gulp-watch'),
}

var argv = require('yargs').argv;

if(argv.fast) console.log('This is fast');

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
