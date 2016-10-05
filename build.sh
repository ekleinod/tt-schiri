#!/bin/bash

# clean jekyll files
cd jekyll
jekyll clean

# build site
JEKYLL_ENV=production jekyll build
