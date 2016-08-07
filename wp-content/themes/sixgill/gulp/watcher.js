'use strict';

module.exports = (gulpComponents) => {
  var gulp = gulpComponents.gulp,
      gutil = gulpComponents.gutil,
      cache = gulpComponents.cache,
      watch = gulpComponents.watch,
      remember = gulpComponents.remember,
      runSequence = gulpComponents.runSequence,
      paths = gulpComponents.paths;


  gulp.task('watch',
    (callback) => runSequence(
        ['watch_js', 'watch_css'],
        callback
    )
  );

  function watchFiles(watchingFilesPatterns, onChangeTasks, fileTypeName, cacheName) {
    var watcher = gulp.watch(watchingFilesPatterns, onChangeTasks); // watch the same files in our scripts task
    watcher.on('change', (file) => {
        gutil.log(gutil.colors.yellow(fileTypeName + ' changed' + ' (' + file.path + ')'));
        if (file.type === 'deleted') { // if a file is deleted, forget about it
            delete cache.caches[cacheName][file.path];
            remember.forget(cacheName, file.path);
        }
    });
  }

  gulp.task('watch_js',
    () => watchFiles(
            paths.watcher.scripts,
            ['build_js'],
            'JS',
            'scripts'
          )
  );

  gulp.task('watch_css', () => {
    () => watchFiles(
            paths.watcher.scripts,
            ['build_css'],
            'CSS',
            'styles'
          )
  });

}
