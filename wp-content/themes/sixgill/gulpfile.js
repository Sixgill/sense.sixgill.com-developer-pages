/**
* The flow
* 1. Concat js -> custom_build.js
* 2. Concat css -> custom_build.css
* 3. Compress custom_build.js
* 4. Compress custom_build.css
* 5. Watch *.js, *.css changes in src/js & src/css dirs
* 5.1 If changed: goto 1
*/

var gulp = require('gulp');
var concat = require('gulp-concat')
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var livereload = require('gulp-livereload');
var gutil = require('gulp-util')
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');

// Custom error handling
function handleError (error) {

  // If you want details of the error in the console
  console.log(error.toString())

  this.emit('end')
}


// Gulp flow
gulp.task('default', ['scripts', 'styles', 'watch']);

// Concatinate js scripts into "./src/custom_build.js"
gulp.task('scripts', function() {
  gutil.log(gutil.colors.green('Concatinate into ./src/custom_build.js'));
  return gulp.src('./src/js/**/*.js')
    .pipe(concat('./src/custom_build.js'))
    .pipe(uglify().on('error', handleError))
    .pipe(gulp.dest('./'))
});

// Concatinate css scripts into "./src/custom_build.css"
gulp.task('styles', function() {
  gutil.log(gutil.colors.green('Concatinate into ./src/custom_build.css'));  
  return gulp.src('./src/css/**/*.css')
    .pipe(concat('./src/custom_build.css'))
    .pipe(cleanCSS())
    .pipe(gulp.dest('./'))
});

// Watch for changes in js & css files
gulp.task('watch', function () {
    livereload.listen();
    gulp.watch('./src/js/**/*.js', ['scripts']).on('change', function(file) {
        livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('JS changed' + ' (' + file.path + ')'));
    });

    gulp.watch('./src/css/**/*.css', ['styles']).on('change', function(file) {
        livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
    });
});
