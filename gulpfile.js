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
    doiuse = require('doiuse'),
    // prettier = require("gulp-prettier"),


// Post CSS related
const
  normalize = require('postcss-normalize'),
  sorting = require('postcss-sorting'),
  
  // REMEMBER COMMAS AND ; AFTER ADJUSTMENTS
  
  // unknown if i should keep but not updated in some time 
    colorguard = require('colorguard'),

  // keeps
  postcssPresetEnv = require('postcss-preset-env');

  // Image related
  imagemin = import('gulp-imagemin');

// Source Map related
const

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

      .pipe(gulp.dest('./css/'))
  );

}

exports.compileSCSSToCSS = compileSCSSToCSS;


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
