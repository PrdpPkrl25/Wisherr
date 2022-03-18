FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    zip \
    unzip \
    libzip-dev 


RUN docker-php-ext-install gd zip

RUN touch .env

COPY .env.example .env

#Composer Image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer install
RUN  php artisan key:generate
RUN php artisan serve --host=0.0.0.0 --port=8080

Expose 4001
