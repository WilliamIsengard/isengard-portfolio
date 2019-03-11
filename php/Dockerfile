FROM richarvey/nginx-php-fpm

RUN rm /var/www/html/index.php


COPY . /var/www
WORKDIR /var/www
RUN mv mailer.php html/index.php
RUN mv mail-config.php html
RUN composer install

EXPOSE 80
