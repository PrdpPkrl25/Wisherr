FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    zip \
    unzip \
    libzip-dev 


RUN docker-php-ext-install gd zip

#Composer Image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer install