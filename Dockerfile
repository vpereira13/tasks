FROM php:7.3-fpm
RUN docker-php-ext-install mysqli pdo_mysql