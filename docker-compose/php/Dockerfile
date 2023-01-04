FROM php:8-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libxml2-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    zip \
    unzip \
    vim \
    nano \
    git \
    curl \
    wget \
    zsh

RUN apt-get update -y
RUN apt-get install -y python3
RUN apt-get install -y python3-pip

RUN docker-php-ext-configure zip

RUN docker-php-ext-install \
    bcmath \
    mbstring \
    pcntl \
    intl \
    zip \
    gd \
    pdo_mysql \
    opcache \
    dom

RUN apt-get update

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u 1000 -d /home/dev dev
RUN mkdir -p /home/dev/.composer && \
    chown -R dev:dev /home/dev

WORKDIR /var/www

USER dev
