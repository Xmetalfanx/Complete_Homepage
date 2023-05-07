const cssnano = require('cssnano')
// const doiuse = require('doiuse')
const postcssDiscardEmpty = require('postcss-discard-empty')
// const postcssAutoreest = require('postcss-autoreset')
const postcssPresetEnv = require('postcss-preset-env')
const postcssSorting = require('postcss-sorting')
const stylelint = require('stylelint')

module.exports = {
  plugins: [
    // doiuse(""),
    postcssPresetEnv({stage: 2}),
    postcssSorting({}),
    postcssDiscardEmpty({}),
    stylelint({
      /* your options */
      "fix": true
    }),
    cssnano({
      preset: 'default',
    })
  ]
}
