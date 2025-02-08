FROM php:8.2-cli-alpine
RUN apk add --no-cache postgresql-dev \
    && docker-php-ext-install pdo_pgsql
WORKDIR /var/www
COPY . .
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader
RUN composer dump-autoload --optimize
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
