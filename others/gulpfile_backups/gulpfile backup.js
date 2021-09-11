'use strict';

var gulp = require('gulp'), 
    sass = require('gulp-dart-sass');

const autoprefixer = require('autoprefixer'),
      postcss = require('gulp-postcss');
var sorting = require('postcss-sorting');
var sourcemaps = require('gulp-sourcemaps');
const cleanCSS = require('gulp-clean-css');


// Compiles sass/scss to css gulp option says it's obsolete and to be honest ... the vscode auto-compiler addon for scss works fine
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
    //.pipe(cleanCSS({colors: 'true', format: 'beautify'}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./scss/**/*.scss', ['sass']);
});

// run stylelint and fix fixable issues on the CSS 
gulp.task('lint-css', function lintCssTask() {
  const gulpStylelint = require('gulp-stylelint');

  return gulp
    .src('css/**/*.css')
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ],
      failAfterError: false,
    }))
    .pipe(gulp.dest('./css'));
});

// run stylelint and fixes fixable issues 
gulp.task('lint-scss', function lintCssTask() {
  const gulpStylelint = require('gulp-stylelint');

  return gulp
    .src('scss/**/*.scss')
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ],
      failAfterError: false,
    }))
    .pipe(gulp.dest('./scss'));
});



gulp.task('minify-css', () => {
  return gulp.src('css/*.css')
    .pipe(cleanCSS({debug: true}, (details) => {
    }))
  .pipe(gulp.dest('css'));
});

