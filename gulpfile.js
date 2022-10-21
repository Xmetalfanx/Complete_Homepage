//////////////////////////////////////////////////////////////////
// Variables

var gulp = require('gulp');
var postcss = require('gulp-postcss');
const sass = require('gulp-sass')(require('sass'));

const
    autoprefixer = require('autoprefixer'),
    //cleanCSS = require('gulp-clean-css'),
    pugLinter = require('gulp-pug-linter'),
    cssnano = require('cssnano'),
    rename = require("gulp-rename"),
    doiuse = require('doiuse'),
    // prettier = require("gulp-prettier"),


// Post CSS related
const
  colorguard = require('colorguard'),
  normalize = require('postcss-normalize'),
  sorting = require('postcss-sorting'),
  postcssPresetEnv = require('postcss-preset-env');

  // Image related
  imagemin = import('gulp-imagemin');

// Source Map related
const
  sourcemaps = require('gulp-sourcemaps');

  const { hsl } = import('chalk');

// End Vars
/////////////////////////////////////////////////////////////

// CSS paths
const cssConfig = {
  scssPath: './scss/**/*.scss',
  cssPath: './css',
};

//////////////////////////////////////////////
// Start of CSS related functions


// Compiles sass/scss to css gulp option says it's obsolete and to be honest ... the vscode auto-compiler addon for scss works fine
async function compileSCSSToCSS() {
  var plugins = [
    normalize({}),
    doiuse({}),
    sorting({}),
    colorguard({
        allowEquivalentNotation: true
    }),
    postcssPresetEnv({}),
  ];

  return (
    gulp
      .src('./scss/styling.scss')

      .pipe(sass.sync().on('error', sass.logError))

      // 1 - run postcss tasks
      .pipe(postcss(plugins))

      .pipe(
        gulpStylelint({
          fix: true,
          failAfterError: false,
        })
      )

      // create sourcemap for CSS (NOT website)
      .pipe(sourcemaps.write('/maps'))
      // .pipe(sourcemaps.write('../maps'))
      .pipe(gulp.dest('./css/'))
  );

}

exports.compileSCSSToCSS = compileSCSSToCSS;

async function minifyCSS() {

  var plugins = [
    require('cssnano')({
      preset: 'default',
  }),
  ];

  return gulp
    .src('./css/styling.css')
    .pipe(postcss(plugins))
    //.pipe(sourcemaps.write())
    .pipe(rename('./styling-min.css'))
    .pipe(gulp.dest('css'));
}

exports.minifyCSS = minifyCSS;

// End of CSS related functions
/////////////////////////////////////////

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

// linter for pug files
// async function lintPug() {
// gulp.src('./**/*.pug').pipe(pugLinter({ reporter: 'default' }));
// }
// exports.lintPug = lintPug;

exports.default = gulp.series(lintFixScss,compileSCSSToCSS,minifyCSS);
