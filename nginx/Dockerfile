FROM nginx:1.19-alpine
WORKDIR /var/www/html
COPY nginx/php-fpm.conf /etc/nginx/conf.d/default.conf

COPY --chown=nginx:nginx symfony/public /var/www/html/public
