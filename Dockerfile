FROM php:5.6-apache
 
# Install PDO MySQL driver
# See https://github.com/docker-library/php/issues/62
#RUN docker-php-ext-install pdo mysql
#RUN docker-php-ext-install pdo mysqli

RUN git clone https://github.com/InvoicePlane/InvoicePlane.git /var/www/html/

# Enable Apache mod_rewrite
RUN a2enmod rewrite