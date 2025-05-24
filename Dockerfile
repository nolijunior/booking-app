# Use the official PHP image with Apache
FROM php:8.2-apache

# Install extensions like mysqli for MySQL connection
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy source code to the container
COPY . /var/www/html/
