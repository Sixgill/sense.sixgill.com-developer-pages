'use strict';

gulp.task('watch',
  (callback) => runSequence(
      ['watch_js', 'watch_css'],
      callback
  )
);

gulp.task('watch_js', () => {
    var watcher = gulp.watch(paths.path.watcher.scripts, ['build_js']); // watch the same files in our scripts task
    watcher.on('change', function (file) {
        gutil.log(gutil.colors.yellow('JS changed' + ' (' + file.path + ')'));
        if (file.type === 'deleted') { // if a file is deleted, forget about it
            delete cache.caches['scripts'][file.path];
            remember.forget('scripts', file.path);
        }
    });
});

gulp.task('watch_css', () => {
    var watcher_css = gulp.watch(paths.path.watcher.styles, ['build_css']);
    watcher_css.on('change', function (file) {
        gutil.log(gutil.colors.yellow('CSS changed' + ' (' + file.path + ')'));
        if (file.type === 'deleted') { // if a file is deleted, forget about it
            delete cache.caches['styles'][file.path];
            remember.forget('styles', file.path);
        }
    });
});
