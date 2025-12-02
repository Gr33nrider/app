FROM php:8.2.12-apache
RUN a2enmod ssl && a2enmod rewrite
RUN mkdir -p /etc/apache2/ssl
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
COPY ./ssl/*.pem /etc/apache2/ssl/
COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY ./app/ /var/www/html/
RUN chmod -R 777 /var/www/html
