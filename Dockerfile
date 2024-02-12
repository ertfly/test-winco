FROM php:8.1-rc-buster
RUN apt-get update && apt-get install -y zip unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY .docker/php.ini /usr/local/etc/php/php.ini
COPY .docker/openssl.cnf /etc/ssl/openssl.cnf

ADD http://www.cacert.org/certs/root.crt /usr/local/share/ca-certificates/cacert.crt
RUN update-ca-certificates

RUN mkdir /app
WORKDIR /app

RUN ln -s /usr/local/bin/php /usr/bin/php
RUN chmod +x /usr/bin/php

ENV COMPOSER_ALLOW_SUPERUSER=1

CMD bash -c "php -S 0.0.0.0:80 -t public"