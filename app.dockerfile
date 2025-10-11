FROM php:8.3.26-fpm


RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg-dev \
    libpng-dev \
    libwebp-dev \
    libpq-dev \
    zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_pgsql gd


COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
