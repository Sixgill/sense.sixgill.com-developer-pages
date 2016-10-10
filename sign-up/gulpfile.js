// How to isntall npm&gulp use link below:
// https://www.sitepoint.com/introduction-gulp-js/

//Before start gulp, pls install node_modules via the command below:
//npm install

// include gulp
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	less = require('gulp-less'),
	runSequence = require('run-sequence'),
	inject = require('gulp-inject');

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


gulp.task('inject',
	() => gulp.src(['./*.html', '!./footer.html', '!./header.html', '!./new_pass_confirm.html', '!./pass_change.html'])
	// Insert HEADER
	.pipe(inject(gulp.src(['./header.html']), {
		starttag: '<!-- inject:header:{{ext}} -->',
		transform: function (filePath, file) {
      		return file.contents.toString('utf8')
			}
	}))
	// Insert FOOTERS
	.pipe(inject(gulp.src(['./footer.html']), {
		starttag: '<!-- inject:footer:{{ext}} -->',
		transform: function (filePath, file) {
      		return file.contents.toString('utf8')
			}
	}))
	.pipe(gulp.dest('./src'))
);
