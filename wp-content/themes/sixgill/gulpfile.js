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

var uglify = require('gulp-uglify');
var pump = require('pump');
 
gulp.task('compress', function (cb) {
  pump([
        gulp.src('./src/js/**/*.js'),
        uglify(),
        gulp.dest('dist')
    ],
    cb
  );
});


var watch = require('gulp-watch');
var livereload = require('gulp-livereload');
var gutil = require('gulp-util')

 
gulp.task('watch', function () {
    livereload.listen();

    // Javascript change + prints log in console
    gulp.watch('./src/js/**/*.js').on('change', function(file) {
        livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('JS changed' + ' (' + file.path + ')'));
    });

    gulp.watch('./src/css/**/*.css').on('change', function(file) {
        livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
    });

});