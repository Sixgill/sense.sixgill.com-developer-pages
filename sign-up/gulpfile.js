// How to isntall npm&gulp use link below:
// https://www.sitepoint.com/introduction-gulp-js/

//Before start gulp, pls install node_modules via the command below:
//npm install

// include gulp
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	less = require('gulp-less'),
	runSequence = require('run-sequence');

// To run gulp type: gulp
gulp.task('default',
  (callback) => runSequence(
      'less',
      'html',
      callback
  )
);

// signup_build.css from ./less dir
gulp.task('less', 
	() => gulp.src('less/*.less')
		.pipe(less())
		.pipe(concat('css/signup_build.css'))
		.pipe(gulp.dest(''))
);

// put html sources into /html_src dir
gulp.task('html', 
	() => gulp.src('*.html')
		.pipe(gulp.dest('./html_src'))
);

