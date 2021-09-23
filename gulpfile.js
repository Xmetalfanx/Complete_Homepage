//////////////////////////////////////////////////////////////////
// Variables

var gulp = require('gulp');
var postcss = require('gulp-postcss');
const sass = require('gulp-sass')(require('sass'));

const
    autoprefixer = require('autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    pugLinter = require('gulp-pug-linter'),
    gcmq = require('gulp-group-css-media-queries'),
    cssnano = require('cssnano'),
    rename = require("gulp-rename"),
    doiuse = require('doiuse'),
    // prettier = require("gulp-prettier"),
    gulpSassLint= require("gulp-sass-lint"),
    gulpStylelint = require('gulp-stylelint');


// Post CSS related
const
    colorguard = require('colorguard'),
    minmax = require('postcss-media-minmax'),
    normalize = require('postcss-normalize'),
    sorting = require('postcss-sorting'),
    colorConverter = require("postcss-color-converter"),
    mediaVariables = require('postcss-media-variables'),
    cssVariables = require("postcss-css-variables");

// Image related
const
    imagemin = require('gulp-imagemin');

// Source Map related
const
  SitemapGenerator = require('advanced-sitemap-generator'),
  sourcemaps = require('gulp-sourcemaps');

  const { hsl } = require('chalk');

// End Vars
/////////////////////////////////////////////////////////////

// CSS paths
const cssConfig = {
  scssPath: './scss/**/*.scss',
  cssPath: './css',
};

//////////////////////////////////////////////
// Start of CSS related functions

  // run stylelint and fixes fixable issues
async function lintFixScss() {

  return gulp
    .src([cssConfig.scssPath])
    .pipe(
      gulpStylelint({
        fix: true,
        reporters: [{ formatter: 'string', console: true }],
      })
    .pipe(gulp.dest("./scss"))
    );
}
exports.lintFixScss = lintFixScss;


// Compiles sass/scss to css gulp option says it's obsolete and to be honest ... the vscode auto-compiler addon for scss works fine
async function compileSCSSToCSS() {
  var plugins = [
    //doiuse({}),
    sorting({}),
    colorConverter({
      outputColorFormat: 'hsl'

    }),
    // // colorguard({
    //   allowEquivalentNotation: true
    // })
  ];

  return (
    gulp
      .src('./scss/styling.scss')

      .pipe(sass.sync().on('error', sass.logError))

      // 1 - run postcss tasks
      .pipe(postcss(plugins))

      // 2 - groups media queries
      //.pipe(gcmq())

      .pipe(
        gulpStylelint({
          fix: true,
          failAfterError: false,
        })
      )

      // create sourcemap
      .pipe(sourcemaps.write('../maps'))
      .pipe(gulp.dest('./css/'))
  );

}

exports.compileSCSSToCSS = compileSCSSToCSS;

async function minifyCSS() {

  return gulp
    .src('./css/styling.css')
    .pipe(
      cleanCSS({
        format: 'beautify'
      })
    )
    .pipe(rename('./styling-min.css'));

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
async function lintPug() {
  gulp.src('./**/*.pug').pipe(pugLinter({ reporter: 'default' }));
}
exports.lintPug = lintPug;

// site map generator
async function siteMapGen() {
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

exports.default = gulp.series(lintFixScss,compileSCSSToCSS,minifyCSS);
