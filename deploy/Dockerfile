FROM php:8.3-fpm-alpine

# Установка Composer
RUN curl -sS https://getcomposer.org/installer  | php -- --install-dir=/usr/local/bin --filename=composer

# Установка зависимостей Alpine
RUN apk add --no-cache \
    bash \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    libxml2-dev \
    autoconf \
    g++ \
    make \
    pkgconfig \
    libpng-dev \
    jpeg-dev \
    freetype-dev \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install -j$(nproc) \
    pdo \
    pdo_mysql \
    mbstring \
    bcmath \
    zip \
    intl \
    opcache \
    exif \
    gd

# Очистка кэша
RUN rm -rf /var/cache/apk/*

# Рабочая директория
WORKDIR /var/www

# Создание папок для Laravel
RUN mkdir -p storage/framework/{views,cache,sessions} storage/logs bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# Открытие порта
EXPOSE 9000

# Запуск PHP-FPM
CMD ["php-fpm"]