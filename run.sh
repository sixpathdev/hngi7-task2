#!/bin/bash

if ! [ -x "$(command -v php)" ]; then
  echo 'Error: PHP is not installed.' >&2
  exit 1
fi

if ! [ -x "$(command -v node)" ]; then
  echo 'Error: Node is not installed.' >&2
  exit 1
fi

if ! [ -x "$(command -v python | command -v python3)" ]; then
  echo 'Error: Python is not installed.' >&2
  exit 1
fi

php ./index.php