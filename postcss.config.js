const cssnano = require('cssnano')
// const doiuse = require('doiuse')
const postcssDiscardEmpty = require('postcss-discard-empty')
// const postcssAutoreest = require('postcss-autoreset')
const postcssPresetEnv = require('postcss-preset-env')
const postcssSorting = require('postcss-sorting')
const stylelint = require('stylelint')

// is this "fs" needed? ... optimize-css-mq has it listed 
// const fs = require("fs");
const optmizemq = require("optimize-css-mq");

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
    optmizemq({
      sort: true,
    }),
    cssnano({
      preset: ['default', {
        colormin: false,
      }],      
    })    
  ]
}
