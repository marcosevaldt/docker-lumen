#!/bin/sh
chmod -R 777 storage bootstrap && composer install && docker-compose up -d
