//*Description*//
'use strict';

module.exports = (gulpComponents) => {
  var gulp = gulpComponents.gulp,
      concat = gulpComponents.concat,
      uglify = gulpComponents.uglify,
      pump = gulpComponents.pump,
      cache = gulpComponents.cache,
      remember = gulpComponents.remember,
      notify = gulpComponents.notify,
      wrapper = gulpComponents.wrapper,
      replace = gulpComponents.replace;

var s_head = wrapper.source_head,
    head = wrapper.head,
    regex = wrapper.regex,
    tail = wrapper.tail


  gulp.task('wrap_scripts',
    () => gulp.src('./js/custom/*.js')
      .pipe(replace(s_head, head))
      .pipe(replace(regex, tail))
      .pipe(concat('custom_build.js'))
      // TODO: need to be debugged
      .pipe(gulp.dest('./'))
  );

  gulp.task('scripts',
    () => gulp.src('./js/**/*.js')
            .pipe(cache('scripts'))
            .pipe(uglify())
            .on('error', notify.onError(
              (error) => 'Error uglifying js. ' + error
            ))
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

