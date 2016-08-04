//*Description*//
'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    map = require('map-stream'),
    plumber = require('gulp-plumber'),
    // autoprefixer = require('gulp-autoprefixer'),
    minifyCSS = require('gulp-minify-css'),
    notify = require('gulp-notify'),
    less = require('gulp-less');

var objects = require('./objects')
var paths = require('./paths')


gulp.task('wrap_it', function(callback) {
    var object = objects.object.wrapper
    object.forEach( function (style) {
        if (style.wrapper != null) {
            gulp.src(style.style_list)
            // .pipe(concat('./' + style.name + '.less')) ffu: catch less errors
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
            gulp.src(style.style_list)
                // .pipe(concat('./' + style.name + '.less')) ffu: catch less errors
                .pipe(concat('./' + style.name + '.css'))
                .pipe(gulp.dest('./build'));
        }
    })
    callback();
});

gulp.task('styles', function() {
    var buildings = paths.path.builds.values
    return gulp.src(buildings)
        // ffu: catch less errors
        // .pipe(plumber())
        // .pipe(less())
        // .on('error', notify.onError(function (error) {
        //     return '\nError compiling css.' + error;
        // }))
        // .pipe(autoprefixer({
        //     browsers: ['last 5 versions'],
        //     cascade: false
        // }))
    // .pipe(minifyCSS()) TODO: add for deploy
        .pipe(concat('custom_build.css'))
        .pipe(gulp.dest('./'))
});