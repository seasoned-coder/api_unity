#!/usr/bin/env bash

echo "Running composer"
composer install

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations and seeding..."
php artisan migrate:fresh --force --seed


echo "Doing swagger...."
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
php artisan l5-swagger:generate
