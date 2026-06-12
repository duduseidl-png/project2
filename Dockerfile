FROM php:8.4-apache

WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install dependencies
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --optimize-autoloader --no-scripts --no-interaction

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set document root and configure Virtual Host
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Configure public directory permissions
RUN echo '<Directory /var/www/html/public>' >> /etc/apache2/conf-available/default-ssl.conf && \
    echo '    Options Indexes FollowSymLinks' >> /etc/apache2/conf-available/default-ssl.conf && \
    echo '    AllowOverride All' >> /etc/apache2/conf-available/default-ssl.conf && \
    echo '    Require all granted' >> /etc/apache2/conf-available/default-ssl.conf && \
    echo '</Directory>' >> /etc/apache2/conf-available/default-ssl.conf

EXPOSE 80

CMD ["apache2-foreground"]
