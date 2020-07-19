#!/bin/bash

sudo rsync  --exclude "node_modules" --exclude "framework" --exclude "database" -rhv * /srv/http/

echo -e "Done"
