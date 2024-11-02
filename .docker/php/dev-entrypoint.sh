#!/bin/bash

set -m

if [ ! -f .env ]; then
  cp .env.example .env
  echo ".env файл был создан из .env.example"
else
  echo ".env файл уже существует"
fi

npm install
composer install
php artisan key:generate
php artisan migrate

bash
