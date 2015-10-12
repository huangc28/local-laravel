var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');

// console.log(path.join(__dirname, 'less', 'includes'));

/**
 * 1. Include main less file
 * 2. Search path for 
 */
gulp.task('less', function(){
	return gulp.src('./public/less/*.less')
		.pipe(less({
			paths: [ path.join(__dirname, 'less', 'includes') ]
		}))
		.pipe(gulp.dest('./public/css'));
});