//'use strict';

var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

const cleanCSS = require('gulp-clean-css'),
  imagemin = require('gulp-imagemin'),
  pugLinter = require('gulp-pug-linter'),
  SitemapGenerator = require('advanced-sitemap-generator');

const cssConfig = {
  scssPath: './scss/**/*.scss',
  cssPath: './css',
};
  // run stylelint and fixes fixable issues
async function lintFixScss() {
  const gulpStylelint = require('gulp-stylelint');

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

// run stylelint and fix fixable issues on the CSS
async function lintFixCss() {
  const gulpStylelint = require('gulp-stylelint');

  return (
    gulp
      .src(cssPath)
      .pipe(
        gulpStylelint({
          fix: true,
          reporters: [{ formatter: 'string', console: true }],
          failAfterError: false,
        })
      )
      // minifies ... no need for another function
      .pipe(cleanCSS({ debug: true }, (details) => {}))
      .pipe(gulp.dest(finalCSSFile))
  );
}
exports.lintFixCss = lintFixCss;

// Compiles sass/scss to css gulp option says it's obsolete and to be honest ... the vscode auto-compiler addon for scss works fine
async function compileSCSSToCSS() {
  return gulp.src([cssConfig.scssPath])
    .pipe(sass.sync())
    .pipe(gulp.dest([cssConfig.cssPath]));
}

exports.compileSCSSToCSS = compileSCSSToCSS;

// this is not to be run all the time
function imageLinuxScreenshotsMin() {
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

function lintPug() {
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

exports.default = gulp.series(lintFixScss, compileSCSSToCSS);
