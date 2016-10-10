// How to isntall npm&gulp use link below:
// https://www.sitepoint.com/introduction-gulp-js/

//Before start gulp, pls install node_modules via the command below:
//npm install

// include gulp
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	less = require('gulp-less'),
	runSequence = require('run-sequence'),
	inject = require('gulp-inject')
	insert = require('gulp-insert');

// To run gulp type: gulp

//TODO: redo it
var htmlHead = '<!DOCTYPE html>\n<html dir="ltr" lang="en-US">\n<head>\n	<meta http-equiv="content-type" content="text/html; charset=utf-8" />\n	<link rel="stylesheet" type="text/css" href="signup_build.css">\n	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900,300,600" rel="stylesheet" type="text/css">\n</head>\n<body>\n';
var htmlTail = "\n</body>\n</html>";

gulp.task('default',
  (callback) => runSequence(
      'less',
      'html',
      'inject',
      callback
  )
);

// signup_build.css from ./less dir
gulp.task('less',
	() => gulp.src('less/*.less')
		.pipe(less())
		.pipe(concat('./signup_build.css'))
		.pipe(gulp.dest(''))
);

// put html sources into /html_src dir
gulp.task('html',
	() => gulp.src(['./src/new_pass_confirm.html', './src/pass_change.html'])
		.pipe(insert.prepend(htmlHead))
		.pipe(insert.append(htmlTail))
		.pipe(gulp.dest('.'))
);


gulp.task('inject',
	() => gulp.src(['./src/*.html', '!./src/footer.html', '!./src/header.html', '!./src/new_pass_confirm.html', '!./src/pass_change.html'])
	// Insert HEADER
	.pipe(inject(gulp.src(['./src/header.html']), {
		starttag: '<!-- inject:header:{{ext}} -->',
		transform: function (filePath, file) {
      		return file.contents.toString('utf8')
			}
	}))
	// Insert FOOTERS
	.pipe(inject(gulp.src(['./src/footer.html']), {
		starttag: '<!-- inject:footer:{{ext}} -->',
		transform: function (filePath, file) {
      		return file.contents.toString('utf8')
			}
	}))
	// Insert head and tail
	.pipe(insert.prepend(htmlHead))
	.pipe(insert.append(htmlTail))
	.pipe(gulp.dest('.'))
);
