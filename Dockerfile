FROM php:8.1.17-apache

RUN apt update \
    && apt install -y \
    git \
    zip \
    unzip \
    vim \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo_mysql \
    && a2enmod rewrite

COPY ./apache/default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./php/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/laravel

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer