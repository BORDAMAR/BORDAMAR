# CARGAMOS IMAGEN DE PHP MODO ALPINE SUPER REDUCIDA
FROM php:8.2-fpm-alpine



COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


WORKDIR /app
COPY . .
RUN rm -rf /app/vendor
RUN rm -rf /app/composer.lock
RUN composer install
RUN composer require laravel/octane
RUN composer require roadrunner-server/roadrunner:v2.0 nyholm/psr7 ./vendor/bin/rr get-binary
COPY .env.example .env
RUN mkdir -p /app/storage/logs
RUN php artisan cache:clear
RUN php artisan view:clear
RUN php artisan config:clear
RUN php artisan install:octane --server="swoole"    
CMD php artisan octane:start --server="swoole" --host="0.0.0.0"

EXPOSE 8000