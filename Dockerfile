FROM php:8.4-apache

# Install ekstensi PHP
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libonig-dev \
    libzip-dev  \
    && docker-php-ext-install \
    intl \
    mbstring \
    pdo_mysql \
    zip \
    && apt-get clean

# 3. Install Node.js (LTS version)
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

# 4. Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Aktifkan mod rewrite
RUN a2enmod rewrite

# Copy custom Apache config
COPY ./.docker/site.conf /etc/apache2/sites-available/site.conf
COPY ./.docker/php.ini /usr/local/etc/php/conf.d/custom.ini

# Disable default config dan enable custom config
RUN a2dissite 000-default.conf && a2ensite site.conf