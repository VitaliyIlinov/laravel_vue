#https://hub.docker.com/_/php
FROM php:8.0-fpm

MAINTAINER vitaliy ilinov <ilinov123@gmail.com>

ARG UID
ARG GID

WORKDIR /var/www/html

# Install and enable additional extensions https://github.com/mlocati/docker-php-extension-installer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

# Install extensions by docker-php-ext-install.
RUN install-php-extensions @composer \
    gd \
    imagick \
    zip \
    opcache \
    memcached \
    xdebug \
    pdo_mysql

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    locales \
    nano \
    zip \
    unzip \
    autoconf \
    make \
    wget \
    git \
    npm \
    default-mysql-client \
    curl

COPY ./ /docker

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

#Create user
RUN groupadd --gid $GID $UID && useradd --uid $UID --gid $GID -m $UID

#additional
RUN bash /docker/after-build.sh
