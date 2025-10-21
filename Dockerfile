FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev zip unzip git curl nodejs npm \
    && docker-php-ext-install pdo_pgsql

WORKDIR /var/www

COPY . /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000
