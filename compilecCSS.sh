#!/bin/bash

clear

gulp compile
gulp lint-scss

# maynot be needed anymore 
gulp lint-css