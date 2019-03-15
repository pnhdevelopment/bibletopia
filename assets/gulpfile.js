var gulp = require('gulp');
var rename = require('gulp-rename');
var svgstore = require('gulp-svgstore');
var svgmin = require('gulp-svgmin');
var path = require('path');
 
gulp.task('svgstore', function () {
    return gulp
        .src('*.svg')
        .pipe(svgmin())
        .pipe(svgstore())
        .pipe( rename({ basename: 'sprite' }) )
        .pipe(gulp.dest('./'));
});

gulp.task('default', function() {
  // place code for your default task here
});

