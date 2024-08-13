# Use the official PHP 8 image as the base image
FROM php:8-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP files from the host to the container
COPY . /var/www/html

# Install any necessary PHP extensions or dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80 for the Apache server
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]