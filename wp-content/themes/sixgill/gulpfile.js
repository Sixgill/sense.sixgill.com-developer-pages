/**
 * Created by WIZARD on 25.07.2016.
 */



var gulp = require('gulp');

gulp.task('default', function() {
    // default task
});

var concat = require('gulp-concat');
 
gulp.task('scripts', function() {
  return gulp.src('./src/js/**/*.js')
    .pipe(concat('custom_build.js'))
    .pipe(gulp.dest('./dist/'));
});

gulp.task('styles', function() {
  return gulp.src('./src/css/**/*.css')
    .pipe(concat('custom_build.css'))
    .pipe(gulp.dest('./dist/'));
});

var minify = require('gulp-minify');
 
gulp.task('compress', function() {
  gulp.src('./src/js/**/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('dist'))
});