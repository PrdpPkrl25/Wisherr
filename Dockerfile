FROM php:8.0-fpm


#Composer Image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer