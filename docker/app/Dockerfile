FROM php:apache

RUN docker-php-source extract \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-source delete

RUN a2enmod rewrite