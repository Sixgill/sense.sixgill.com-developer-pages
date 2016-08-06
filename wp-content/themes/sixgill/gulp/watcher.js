'use strict';
var gulp = require('gulp'),
    watch = require('gulp-watch'),
    livereload = require('gulp-livereload'),
    gutil = require('gulp-util'),
    cache = require('gulp-cached'),
    remember = require('gulp-remember');

var paths = require('./paths');

gulp.task('watch', function () {
    // livereload.listen();
    var watcher = gulp.watch(paths.path.watcher.scripts, ['scripts']); // watch the same files in our scripts task
    watcher.on('change', function (file) {
        // livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('JS changed' + ' (' + file.path + ')'));
        if (file.type === 'deleted') { // if a file is deleted, forget about it
            delete cache.caches['scripts'][file.path];
            remember.forget('scripts', file.path);
        }
    });
    // var watcher_css = gulp.watch('./css/**/*.css', ['styles']);
    // watcher_css.on('change', function (file) {
    //     livereload.changed(file.path);
    //     gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
    //     if (file.type === 'deleted') { // if a file is deleted, forget about it
    //         delete cache.caches['styles'][file.path];
    //         remember.forget('styles', file.path);
    //     }
    // });

    var watcher_css = gulp.watch(paths.path.watcher.styles, ['build']);
    watcher_css.on('change', function (file) {
        // livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
        if (file.type === 'deleted') { // if a file is deleted, forget about it
            delete cache.caches['styles'][file.path];
            remember.forget('styles', file.path);
        }
    });

    // gulp.watch('./css/**/*.css', ['build']).on('change', function(file) {
    //     livereload.changed(file.path);
    //     gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
    // });
});

gulp.task('watch:fast', function () {
    // livereload.listen();
    var watcher = gulp.watch(paths.path.watcher.scripts, ['scripts:fast']); // watch the same files in our scripts task
    watcher.on('change', function (file) {
        // livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('JS changed' + ' (' + file.path + ')'));
        if (file.type === 'deleted') { // if a file is deleted, forget about it
            delete cache.caches['scripts'][file.path];
            remember.forget('scripts', file.path);
        }
    });
    var watcher_css = gulp.watch(paths.path.watcher.styles, ['build']);
    watcher_css.on('change', function (file) {
        // livereload.changed(file.path);
        gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
        if (file.type === 'deleted') { // if a file is deleted, forget about it
            delete cache.caches['styles'][file.path];
            remember.forget('styles', file.path);
        }
    });

    // gulp.watch('./css/**/*.css', ['build']).on('change', function(file) {
    //     livereload.changed(file.path);
    //     gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
    // });
});
