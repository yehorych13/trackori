FROM php:8.4-apache

RUN docker-php-ext-install pdo pdo_mysql

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

RUN chown -R www-data:www-data /var/www/html

RUN a2enmod rewrite

ADD apache.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 80
CMD ["apache2-foreground"]
