FROM php:7.4.33-fpm

RUN apt update && apt install -y \
                                 libfreetype6-dev \
                                 libjpeg62-turbo-dev \
                                 libpng-dev \
                                 libwebp-dev \
                                 libzip-dev \
                                 zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-install -j$(nproc) mysqli
