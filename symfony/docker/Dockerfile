FROM php:7.4-fpm-alpine3.12 AS base
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
RUN chown -R www-data:www-data ./
COPY --chown=www-data:www-data composer.json composer.lock ./



FROM base AS development
WORKDIR /var/www/html
USER www-data
RUN composer install
COPY --chown=www-data:www-data . .



FROM base AS production
WORKDIR /var/www/html
USER www-data
RUN APP_ENV=prod composer install --no-cache --no-dev --optimize-autoloader
COPY --chown=www-data:www-data . .
