#!/bin/bash

function userPrompt() {
    read -rp "Press any key to continue"
}

clear 
echo "Running scss check/fix THEN Compile Sass to a raw CSS file"
npm run fix:scss && userPrompt && npm run compile:scss 
userPrompt

clear 
echo "Fixing output CSS with Stylelint"
npm run fix:css
userPrompt

clear 
echo "Running PostCSS on RAW CSS file, including Minifying"
npm run postcss:all
userPrompt

echo "COMPLETED"

echo "Performing Cleanup"
rm css/styling-raw*
rm css/styling-postcss*
echo "Cleanup complete"