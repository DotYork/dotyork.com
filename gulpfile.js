//	Import Modules

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	notify = require('gulp-notify'),
	header = require('gulp-header'),
	cssnano = require('gulp-cssnano'),
	pkg = require('./package.json'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	jshint = require('gulp-jshint');


//	Setup Banner

var banner = ['/**',
  ' * <%= pkg.name %>',
  ' * <%= pkg.description %>',
  ' * @author <%= pkg.author.name %> <<%= pkg.author.email %>>',
  ' */',
  ''].join('\n');


gulp.task('sass', function() {
	gulp.src('_dev/styles/*.scss')
		.pipe(sass())
		.pipe(header(banner, { pkg : pkg } ))
		.pipe(gulp.dest('assets/css/'))
		.pipe(notify({ message: 'Sass Compiled' }));
});

gulp.task('js', function() {
	gulp.src('_dev/scripts/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(concat("master.js"))
		.pipe(header(banner, { pkg : pkg } ))
		.pipe(gulp.dest('assets/js/'))
		.pipe(notify({ message: 'Scripts Done'}))
});


gulp.task('watch', function() {
	gulp.watch('_dev/styles/**/*.scss', ['sass']);
	//gulp.watch('_dev/scripts/*.js', ['js']);
});


gulp.task('build', function() {
	gulp.src('assets/css/*.css')
		.pipe(cssnano())
		.pipe(gulp.dest('assets/css/'));
	// gulp.src('assets/js/master.js')
	// 	.pipe(uglify())
	// 	.pipe(gulp.dest('assets/js/'));
})

gulp.task('default', ['watch']);