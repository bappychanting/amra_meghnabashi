# Stage 1: Build dependencies with composer
# Use a PHP 7.4-cli image and manually install composer
FROM php:7.4-cli-alpine as builder

# Set the working directory
WORKDIR /app

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the composer files and install dependencies
COPY src/composer.json src/composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Stage 2: Final PHP-FPM image
FROM php:7.4-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    git \
    supervisor \
    libpng-dev \
    libjpeg-turbo-dev \
    curl-dev \
    oniguruma-dev \
    libxml2-dev \
    libzip-dev \
    unzip

# Install required PHP extensions for Laravel
# Note: 'opcache' is now listed only once
RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    tokenizer \
    xml \
    zip \
    bcmath \
    ctype \
    fileinfo \
    json \
    dom \
    gd \
    curl \
    opcache

# Set the working directory to the Laravel project root
WORKDIR /var/www

# Copy the application source code from the 'src' directory
COPY src ./

# Copy vendor directory from the builder stage
COPY --from=builder /app/vendor ./vendor

# Set permissions for the web server user
RUN chown -R www-data:www-data /var/www/storage

# Expose PHP-FPM port
EXPOSE 9000

# The default command runs PHP-FPM
CMD ["php-fpm"]