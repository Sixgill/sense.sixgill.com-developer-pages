//*Description*//
'use strict';

module.exports = (gulpComponents) => {
  var gulp = gulpComponents.gulp,
      less = gulpComponents.less,
      cache = gulpComponents.cache,
      cleanCSS = gulpComponents.cleanCSS,
      cssWrappers = gulpComponents.cssWrappers,
      concat = gulpComponents.concat,
      map = gulpComponents.map,
      remember = gulpComponents.remember,
      paths = gulpComponents.paths,
      eventStream = gulpComponents.eventStream;

var lessSource = paths.less.source,
    lessDest = paths.less.dest;

var buildings = paths.builds.values;

  gulp.task('less',
    () => gulp.src(lessSource)
          .pipe(less())
          .pipe(gulp.dest(lessDest))
  );

  gulp.task('wrap_css', (callback) => {
    return eventStream.merge(cssWrappers.map((style) => {
      if (style.wrapper !== null) {
        return gulp.src(style.style_list)
        .pipe(concat('./' + style.name + '.css'))
        .pipe(map( (file, cb) => {
            var fileContents = file.contents.toString();
                  fileContents = style.wrapper + '\n' + fileContents + '}\n';
                  file.contents = new Buffer(fileContents);
                  cb(null, file);
        }))
        .pipe(gulp.dest('./build'))
      } else {
        return gulp.src(style.style_list)
          .pipe(concat('./' + style.name + '.css'))
          .pipe(gulp.dest('./build'));
      }
    }));
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
