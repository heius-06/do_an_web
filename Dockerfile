FROM php:7.4.3-fpm

# Chuyển hướng kho Debian 10 Buster đã hết hạn sang archive.debian.org
RUN sed -i 's/deb.debian.org/archive.debian.org/g' /etc/apt/sources.list && \
    sed -i 's|security.debian.org/debian-security|archive.debian.org/debian-security|g' /etc/apt/sources.list && \
    sed -i '/buster-updates/d' /etc/apt/sources.list

# Cài đặt các gói thư viện phụ trợ
RUN apt-get -o Acquire::Check-Valid-Until=false update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Cài đặt extension APCu
RUN pecl install apcu-5.1.20 && docker-php-ext-enable apcu

# Cài đặt các extension kết nối Database và xử lý giao diện
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd mysqli

WORKDIR /var/www

COPY . /var/www/

RUN chown -R www-data:www-data /var/www

CMD ["php-fpm"]
