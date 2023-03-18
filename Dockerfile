FROM php:8.1.17-apache

RUN apt update \
    && apt install -y \
    git \
    zip \
    unzip \
    vim

WORKDIR /var/www/laravel

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer