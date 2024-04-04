# Use a imagem oficial do PHP como base
FROM php:8.2.12-fpm

# Instale as dependências do Laravel
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        git \
        && docker-php-ext-install zip pdo_mysql

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configure o PHP para o ambiente de desenvolvimento
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Configure o diretório de trabalho
WORKDIR /var/www/html

# Copie o código-fonte do Laravel para o contêiner
COPY . .

# Instale as dependências do Composer
RUN composer install

# Configure as permissões de escrita para o Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponha a porta 9000 para o servidor PHP-FPM
EXPOSE 9000

# Inicie o servidor PHP-FPM
CMD ["php-fpm"]

