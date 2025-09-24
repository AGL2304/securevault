FROM php:8.2-fpm-alpine

# Installation des dépendances système
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    libsodium-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libzip-dev \
    icu-dev \
    autoconf \
    g++ \
    make

# Installation des extensions PHP nécessaires pour Laravel et la sécurité
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    intl \
    sodium

# Installation de Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Création de l'utilisateur www
RUN addgroup -g 1000 www && adduser -u 1000 -G www -s /bin/sh -D www

# Configuration du répertoire de travail
WORKDIR /var/www/html

# Copie du fichier composer.json et composer.lock en premier (pour optimiser le cache Docker)
COPY --chown=www:www composer*.json /var/www/html/

# Installation des dépendances Composer
USER www
RUN composer install --optimize-autoloader --no-dev --no-scripts --ignore-platform-reqs || composer install --optimize-autoloader --no-scripts --ignore-platform-reqs

# Copie du reste des fichiers de l'application
USER root
COPY --chown=www:www . /var/www/html

# Finalisation de l'installation Composer et génération de l'autoloader
USER www
RUN composer dump-autoload --optimize

# Permissions
USER root
RUN chown -R www:www /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN chmod -R 755 /var/www/html/bootstrap/cache

# Configuration PHP pour la sécurité
RUN echo "memory_limit=256M" >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
RUN echo "upload_max_filesize=64M" >> /usr/local/etc/php/conf.d/docker-php-uploads.ini
RUN echo "post_max_size=64M" >> /usr/local/etc/php/conf.d/docker-php-uploads.ini
RUN echo "max_execution_time=300" >> /usr/local/etc/php/conf.d/docker-php-time.ini

# Désactivation des fonctions PHP dangereuses pour la sécurité
RUN echo "disable_functions=exec,passthru,shell_exec,system,proc_open,popen,curl_exec,curl_multi_exec,parse_ini_file,show_source" >> /usr/local/etc/php/conf.d/docker-php-security.ini

USER www

EXPOSE 9000

CMD ["php-fpm"]