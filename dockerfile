FROM php:8-apache-buster

RUN docker-php-ext-install pdo pdo_mysql

COPY ./www /var/www/html/

EXPOSE 80