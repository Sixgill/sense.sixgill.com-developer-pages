var paths = require('./gulp/paths');
var paths = require('./gulp/scripts');
var paths = require('./gulp/styles');
var paths = require('./gulp/watcher');

var gulp = require('gulp'),
    runSequence = require('run-sequence'),
    del = require('del');

/*default*/
gulp.task('default', function() {
    runSequence(
        'clean',
        'build',
        'watch'
    )
});

gulp.task('fast', function() {
    runSequence(
        'clean',
        'build:fast',
        'watch:fast'
    )
});

/*clean*/
gulp.task('clean', function () {
    return del([
        './custom_build.css',
        './custom_build.js',
        'build',
    ]);
});

/*build*/
gulp.task('build', function(callback) {
    runSequence(
        'wrap_it',
        'scripts',
        'styles',
        callback
    );
});

/*build*/
gulp.task('build:fast', function(callback) {
    runSequence(
        'wrap_it',
        'scripts:fast',
        'styles',
        callback
    );
});
