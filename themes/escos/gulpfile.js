// grab our packages
var gulp   = require('gulp'),
    jshint = require('gulp-jshint'),
    sass   = require('gulp-sass'),
    jsmin = require('gulp-jsmin');

// define the default task and add the watch task to it
gulp.task('default', ['watch']);

gulp.task('build-css', function() {
  return gulp.src('assets/styles/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/css'));
});

// configure the jshint task
gulp.task('jshint', function() {
  return gulp.src('assets/scripts/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(jsmin())
    .pipe(gulp.dest('public/scripts'));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
  gulp.watch('assets/scripts/**/*.js', ['jshint']);
  gulp.watch('assets/styles/**/*.scss', ['build-css']);
});
