#!/bin/bash

sudo rsync --exclude "node_modules" -ruhv ./* /var/www/

echo -e "Done"
