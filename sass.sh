#!/bin/bash

function cleanCSSFolder() {
  clear && echo "Clearing out CSS folder"
  rm css/*.css
  rm css/*.css.map
}

function userPrompt() {
    read -rp "Press any key to continue"
}

cleanCSSFolder

clear && echo "Running scss check/fix THEN Compile Sass to a raw CSS file"
npm run fix:scss
#userPrompt
npm run compile:scss
userPrompt
#npm run fix:rawcss

clear && echo "Running PostCSS on RAW CSS file"
npm run postcss:all
#userPrompt

clear && echo "Fixing output CSS with Stylelint"
npm run fix:postcss
#userPrompt

echo "Minifying CSS"
npm run minify:css

echo "COMPLETED"
userPrompt

clear
echo "Performing Cleanup"
rm css/styling-raw.css*
rm css/styling-postcss.css*
echo "Cleanup complete"
