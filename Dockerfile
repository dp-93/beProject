FROM php:8.1-apache
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get install -y libssl-dev
EXPOSE 8080
CMD ["apache2-foreground"]