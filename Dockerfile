FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libonig-dev \
    apt-utils \
    libpng-dev \
    unzip \
    curl \
    git

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Set working directory
WORKDIR /app

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory contents
COPY . /app

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /app

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

# Install any project specific dependencies here
