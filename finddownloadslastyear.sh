#!/bin/bash

ls jekyll/downloads/ -alFh --recursive | grep "^l.*-$(date +%Y).*"

# EOF
