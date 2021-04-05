#!/bin/bash

clear


gulp lint-scss

#  compile the sass to css
gulp compile

# maynot be needed anymore
gulp lint-css
