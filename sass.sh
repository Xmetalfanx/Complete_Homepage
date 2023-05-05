#!/bin/bash

function userPrompt() {
    read -p "Press any key to continue"
}

clear 
echo "Running scss check"
npm run fix:scss
userPrompt

clear
echo "Compiling Sass to a raw CSS file"
npm run compile:scss 
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