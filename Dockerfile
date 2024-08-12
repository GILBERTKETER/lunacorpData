# syntax=docker/dockerfile:1

# Stage 1: Install production dependencies using Composer
FROM composer:lts as prod-deps
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction

# Stage 2: Install development dependencies using Composer
FROM composer:lts as dev-deps
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-interaction

# Stage 3: Base image with PHP 8.2 and Apache
FROM php:8.2-apache as base

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy application code to the container
COPY . /var/www/html

# Stage 4: Development environment
FROM base as development

# Copy test files
COPY ./tests /var/www/html/tests

# Use development PHP configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Copy development dependencies
COPY --from=dev-deps /app/vendor/ /var/www/html/vendor

# Stage 5: Final production image
FROM base as final

# Use production PHP configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy production dependencies
COPY --from=prod-deps /app/vendor/ /var/www/html/vendor

# Set the user to www-data for security
USER www-data