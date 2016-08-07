//*Description*//
'use strict';

module.exports = function(gulpComponents) {
  var gulp = gulpComponents.gulp,
      concat = gulpComponents.concat,
      uglify = gulpComponents.uglify,
      pump = gulpComponents.pump,
      cache = gulpComponents.cache,
      remember = gulpComponents.remember,
      notify = gulpComponents.notify;

  gulp.task('wrap_scripts',
    () => gulp
  );

  gulp.task('scripts',
    () => gulp.src('./js/**/*.js')
            .pipe(cache('scripts'))
            .pipe(uglify())
            .on('error', notify.onError(function (error) {
              return 'Error uglifying js.' + error;
            }))
            .pipe(remember('scripts'))
            .pipe(concat('custom_build.js'))
            .pipe(gulp.dest('./'))
  );

  //*Description*//
  gulp.task('scripts:fast',
    () => gulp.src('./js/**/*.js')
            .pipe(concat('custom_build.js'))
            .pipe(gulp.dest('./'))
  );
}
