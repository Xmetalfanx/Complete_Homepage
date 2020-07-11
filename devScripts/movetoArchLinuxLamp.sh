#!/bin/bash

sudo rsync --exclude "node_modules" -rhv * /srv/http

echo -e "Done"