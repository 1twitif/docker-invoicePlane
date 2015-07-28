FROM php:5.4-apache
WORKDIR /var/www/html/
RUN rm -rf /var/www/html/*
RUN curl -L https://github.com/InvoicePlane/InvoicePlane/archive/v1.4.3.tar.gz | tar xz --strip-components=1

#RUN curl -L https://api.crowdin.com/api/project/fusioninvoice/download/all.zip?key= > tmp.zip# download translation

RUN a2enmod rewrite

RUN docker-php-ext-install pdo mysql

RUN usermod -u 1000 www-data
RUN chmod o+w -R uploads application/config/database.php application/helpers/mpdf/tmp application/logs
#RUN mkdir application/config/development

RUN apt-get update && apt-get install php5-mcrypt nano -y
RUN php5enmod mcrypt
ENV TERM=xterm

VOLUME /var/www/html/uploads
#CMD chmod o+w -R /var/www/html/uploads &
# && apache -D FOREGROUND
