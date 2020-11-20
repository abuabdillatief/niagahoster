FROM php:7.4.0beta4-apache

RUN apt-get update && apt-get upgrade -y \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install gettext