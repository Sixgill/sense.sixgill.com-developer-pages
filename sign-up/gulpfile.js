// How to isntall npm&gulp use link below:
// https://www.sitepoint.com/introduction-gulp-js/

//Before start gulp, pls install node_modules via the command below:
//npm install

// include gulp
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	less = require('gulp-less');

// create build.css from ./less dir
// To run gulp type: gulp

gulp.task('default', function () {
	gulp.src('less/*.less')
		.pipe(less())
		.pipe(concat('css/signup_build.css'))
		.pipe(gulp.dest(''));
});
