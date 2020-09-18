FROM php:7.4-apache

ADD playground.conf /etc/apache2/sites-available/

RUN a2ensite playground.conf && \
    a2dissite 000-default.conf && \
    a2dissite default-ssl.conf && \
    a2enmod rewrite

WORKDIR /var/www/playground