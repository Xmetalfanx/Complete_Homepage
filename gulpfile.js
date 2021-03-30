'use strict';

var gulp = require('gulp');
var sass = require('gulp-dart-sass');

const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
//const prettier = require('gulp-prettier');
var sorting = require('postcss-sorting');
var sourcemaps = require('gulp-sourcemaps');
const cleanCSS = require('gulp-clean-css');



//sass.render({file: universalSCSS/styling.scss}, function(err, result) { /* ... */ });

// The sass/scss to css gulp option says it's obsolete and to be honest ... the vscode auto-compiler addon for scss works fine

gulp.task('compile', function(){
  var plugin = [
    // PostCSS Plugins
    autoprefixer,
    sorting,
  ]

  return gulp.src('./scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    //.pipe(postcss(plugin))
    //.pipe(prettier({}))
    //.pipe(cleanCSS({colors: 'true', format: 'beautify'}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./scss/**/*.scss', ['sass']);
});

gulp.task('lint-css', function lintCssTask() {
  const gulpStylelint = require('gulp-stylelint');

  return gulp
    .src('universalSCSS/**/*.scss')
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ],
      failAfterError: false,
    }))
    .pipe(gulp.dest('./scss'));
});
