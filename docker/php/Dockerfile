FROM php:7.2-fpm-alpine

WORKDIR /var/www/html

# Install system dependencies
RUN apk update && apk add --no-cache \
    git \
    zip \
    unzip \
    # MySQL/MariaDB Dependency for mysqli/pdo_mysql
    mariadb-connector-c-dev \
    # Dependencies for other extensions (mbstring, gd, etc.)
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    # Build Tools (to be removed later)
    autoconf \
    g++ \
    make \
 && docker-php-ext-configure gd \
    --with-freetype-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ \
 && docker-php-ext-install -j$(nproc) \
    mysqli \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
    gd \
    # Install the intl extension, since you had 'icu-dev'
    intl \
 && apk del --purge autoconf g++ make mariadb-connector-c-dev icu-dev oniguruma-dev libzip-dev libpng-dev libjpeg-turbo-dev freetype-dev

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Fix permissions
RUN chown -R nobody:nogroup /var/www/html \
    && chmod -R 755 /var/www/html
