//*Description*//
'use strict';

module.exports = function(gulpComponents) {
  var gulp = gulpComponents.gulp,
      less = gulpComponents.less,
      cache = gulpComponents.cache,
      clean = gulpComponents.clean,
      concat = gulpComponents.concat,
      map = gulpComponents.map,
      remember = gulpComponents.remember;


  gulp.task('less',
    () => gulp.src(lessSource)
          .pipe(less())
          .pipe(gulp.dest(lessDest))
  );

  gulp.task('wrap_css', (callback) => {
    object.forEach((style) => {
      if (style.wrapper !== null) {
        gulp.src(style.style_list)
          .pipe(concat('./' + style.name + '.css'))
          .pipe(map( (file, cb) => {
              var fileContents = file.contents.toString();
                    fileContents = style.wrapper + '\n' + fileContents + '}\n';
                    file.contents = new Buffer(fileContents);
                    cb(null, file);
          }))
          .pipe(gulp.dest('./build'));
      } else {
        gulp.src(style.style_list)
          .pipe(concat('./' + style.name + '.css'))
          .pipe(gulp.dest('./build'));
      }
    });
    callback();
  });

  gulp.task('styles',
    () => gulp.src(buildings)
            .pipe(cache('styles'))
            .pipe(cleanCSS())
            .pipe(remember('styles'))
            .pipe(concat('custom_build.css'))
            .pipe(gulp.dest('./'))
  );

}
