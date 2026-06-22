FROM php:8.4-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    curl zip unzip git \
    libsqlite3-dev nodejs npm \
    && docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN cp .env.example .env

RUN echo "\nAPP_URL=https://simuladoenade.onrender.com\nASSET_URL=https://simuladoenade.onrender.com" >> .env

RUN npm install && npm run build

RUN touch database/database.sqlite

RUN php artisan key:generate --force
RUN php artisan migrate:refresh --force
RUN php artisan db:seed --force

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]