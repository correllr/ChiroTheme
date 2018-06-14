/* 
- Save this file as gulpfile.js in directory (eg /wordpress/)
- Open gitbash and enter 'cd *directory*
- Install node on computer (waarschijnlijk al gedaan)
- Gitbash enter 'npm init' & accept alles
- Enter 'npm gulp --g'
- Enter 'npm gulp-watch gulp-sass browser-sync gulp-plumber --save-d'
- Fill in details below (waarschijnlijk nodig _sass folder maken voor scss files in root)
- Enter 'gulp'

*/

var gulp = require('gulp'),
watch = require('gulp-watch'),
sass = require('gulp-sass'),
plumber = require('gulp-plumber'),
BrowserSync = require('browser-sync').create();



gulp.task('browser-sync', function() {
	var files = [
		'./style.css',
		'./**/*.scss',
		'./*.php'
	];
	// Initialise BrowserSync
	
	BrowserSync.init(files, {
		proxy: 'http://localhost/chirotheme'
	});
});

gulp.task('sass', function () {
	return gulp.src('./_sass/*.scss')
	.pipe(plumber())
	 .pipe(sass({
		'outputStyle': 'compressed'
	}))
	.pipe(gulp.dest(''))
	.pipe(BrowserSync.stream());
})

gulp.task('default', ['sass', 'browser-sync'], function() {
	gulp.watch('_sass/**/*.scss', ['sass'])
});