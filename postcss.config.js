const cssnano = require('cssnano')
const doiuse = require('doiuse')
// const postcssDiscardEmpty = require('postcss-discard-empty')
//const postcssAutoreest = require('postcss-autoreset')
const postcssPresetEnv = require('postcss-preset-env')
const postcssSorting = require('postcss-sorting')

module.exports = {
  plugins: [
       // doiuse(""),
    require('postcss-preset-env')({stage: 2}),
    cssnano({
      preset: 'default',
  }),
  ]
}
