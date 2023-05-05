module.exports = {
  plugins: [
    // require("postcss-autoreset")({
    //   reset: {
    //     margin: 0,
    //     padding: 0,
    //     borderRadius: 0,
    //   },
    // }),
    require('postcss-discard-empty'),
    // //require('doiuse')(""),
    require('postcss-preset-env')({stage: 2}),
    require('cssnano')
  ]
}
