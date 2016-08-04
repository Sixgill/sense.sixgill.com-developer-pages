//*Description*//
'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    pump = require('pump'),
    cache = require('gulp-cached'),
    remember = require('gulp-remember'),
    notify = require('gulp-notify');

//*Description*//
gulp.task('scripts', function() {
    return gulp.src('./js/**/*.js')
        .pipe(cache('scripts'))
        .pipe(uglify())
        .on('error', notify.onError(function (error) {
            return 'Error uglifying js.' + error;
        }))
        .pipe(remember('scripts'))
        .pipe(concat('custom_build.js'))
        .pipe(gulp.dest('./'))
});

//*Description*//
gulp.task('scripts:fast', function() {
    return gulp.src(['./js/**/*.js',  '!js/**/*.min.js'])
        .pipe(concat('custom_build.js'))
        .pipe(gulp.dest('./'))
});
