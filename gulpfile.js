"use strict";

<<<<<<< HEAD
var gulp = require('gulp'),
  sass = require('gulp-dart-sass'),
  sorting = require('postcss-sorting'),
  sourcemaps = require('gulp-sourcemaps'),
  minmax = require('postcss-media-minmax'),
  gcmq = require('gulp-group-css-media-queries');

const autoprefixer = require('autoprefixer'),
  postcss = require('gulp-postcss'),
  cleanCSS = require('gulp-clean-css'),
  imagemin = require('gulp-imagemin'),
  pugLinter = require('gulp-pug-linter'),
  SitemapGenerator = require('advanced-sitemap-generator');

// run stylelint and fixes fixable issues
async function lintFixScss() {
  const gulpStylelint = require('gulp-stylelint');
=======
var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));

const autoprefixer = require("autoprefixer");
const postcss = require("gulp-postcss");
const prettier = require("gulp-prettier");
var sorting = require("postcss-sorting");
var sourcemaps = require("gulp-sourcemaps");
const cleanCSS = require("gulp-clean-css");

//sass.compiler = require('dart-sass');
>>>>>>> f6c52021 (npm updates)

  return gulp
    .src('scss/**/*.scss')
    .pipe(
      gulpStylelint({
        fix: true,
        reporters: [{ formatter: 'string', console: true }],
        failAfterError: false,
      })
    )
    .pipe(gulp.dest('./scss'));
}
exports.lintFixScss = lintFixScss;

<<<<<<< HEAD
// run stylelint and fix fixable issues on the CSS
async function lintFixCss() {
  const gulpStylelint = require('gulp-stylelint');

  return (
    gulp
      .src('css/**/*.css')
      .pipe(
        gulpStylelint({
          fix: true,
          reporters: [{ formatter: 'string', console: true }],
          failAfterError: false,
        })
      )
      // minifies ... no need for another function
      .pipe(cleanCSS({ debug: true }, (details) => {}))
      .pipe(gulp.dest('./css'))
  );
}
exports.lintFixCss = lintFixCss;

// Compiles sass/scss to css gulp option says it's obsolete and to be honest ... the vscode auto-compiler addon for scss works fine
async function compileSCSSToCSS() {
=======
gulp.task("compile", function () {
>>>>>>> f6c52021 (npm updates)
  var plugin = [
    // PostCSS Plugins
    autoprefixer,
    sorting,
  ];

  return (
    gulp
<<<<<<< HEAD
      .src('./scss/**/*.scss')
      .pipe(sourcemaps.init())
      .pipe(sass().on('error', sass.logError))
      //.pipe(postcss(plugin))
      .pipe(gcmq())
      .pipe(sourcemaps.write('../maps'))
      .pipe(gulp.dest('./css'))
  );
}
exports.compileSCSSToCSS = compileSCSSToCSS;

// this is not to be run all the time
async function imageLinuxScreenshotsMin() {
  gulp
    .src('linuxHQ/screenshots/**/*')
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.mozjpeg({ quality: 90, progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
      ])
    )

    .pipe(gulp.dest('linuxHQ/optScreenshots'));
}
exports.imageLinuxScreenshotsMin = imageLinuxScreenshotsMin;

async function lintPug() {
  gulp.src('./**/*.pug').pipe(pugLinter({ reporter: 'default' }));
}
exports.lintPug = lintPug;

function siteMapGen() {
  // create generator
  const generator = SitemapGenerator('http://xmetal.x10.mx', {
    stripQuerystring: false,
    ignoreHreflang: true,
  });

  // register event listeners
  generator.on('done', () => {
    // sitemaps created
  });

  // start the crawler
  generator.start();
}
exports.siteMapGen = siteMapGen;


exports.default = gulp.series(lintFixScss, compileSCSSToCSS, lintFixCss);
=======
      .src("./universalSCSS/**/*.scss")
      .pipe(sourcemaps.init())
      .pipe(sass()) // Using gulp-sass
      //.pipe(postcss(plugin))
      .pipe(prettier({}))
      //.pipe(cleanCSS({colors: 'true', format: 'beautify'}))
      .pipe(sourcemaps.write("."))
      .pipe(gulp.dest("./universalCSS"))
  );
});

gulp.task("sass:watch", function () {
  gulp.watch("./sass/**/*.scss", ["sass"]);
});
>>>>>>> f6c52021 (npm updates)
