FROM php:7.2-fpm-alpine

# Set the working directory
WORKDIR /var/www/html

# Install required system dependencies (Alpine uses 'apk add')
# The "build-dependencies" are needed temporarily to compile PHP extensions
# The other packages are runtime dependencies
RUN apk update && apk add --no-cache \
        git \
        zip \
        unzip \
        # Build dependencies for compiling extensions
        autoconf \
        g++ \
        make \
        # Core dependencies for common extensions
        libzip-dev \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev \
    # Remove build dependencies after install to keep the image small
    && docker-php-ext-configure gd \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
        --with-freetype-dir=/usr/include/ \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd \
    && apk del autoconf g++ make

# Install Composer
# Use composer:2 or composer:latest, which should be compatible with PHP 7.2
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Fix permissions
# Alpine doesn't use www-data by default; it uses 'nobody' for FPM
RUN chown -R nobody:nogroup /var/www/html \
    && chmod -R 755 /var/www/html