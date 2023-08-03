# Image docker utilisée au départ
FROM php:8.2.8-apache

ENV XDEBUG_PORT 9003

# Install System Dependencies
# ***********************************************************
# Ajout du dépôt officiel de Yarn
RUN curl https://deb.nodesource.com/setup_12.x | bash
RUN curl https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list

# Installation de différents logiciels
RUN apt-get update \
	&& DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
	software-properties-common \
	&& apt-get update \
	&& DEBIAN_FRONTEND=noninteractive apt-get install -y \
	nodejs \
    yarn \
	libfreetype6-dev \
	libicu-dev \
    libssl-dev \
	libjpeg62-turbo-dev \
	libmcrypt-dev \
	libedit-dev \
	libedit2 \
	libxslt1-dev \
	libzip-dev \
	apt-utils \
	gnupg \
	mariadb-client \
	zlib1g-dev \
	libpng-dev \
	libjpeg-dev \
	git \
	vim \
	wget \
	curl \
	lynx \
	psmisc \
	unzip \
	tar \
	cron \
	bash-completion \
	zsh \
	&& apt-get clean

# Installation de Mongo DB
RUN pecl install mongodb

# Extensions PHP à installer
RUN docker-php-ext-configure \
  	gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/; \
  	docker-php-ext-install \
  	opcache \
  	bcmath \
  	gd \
  	intl \
  	mysqli \
  	pdo_mysql \
  	soap \
  	xsl \
  	zip \
  	sockets

# Install Composer
RUN	curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

# Install Oh MyZSH
RUN wget https://github.com/robbyrussell/oh-my-zsh/raw/master/tools/install.sh -O - | zsh || true

# Xdebug
#RUN yes | pecl install xdebug-3.1.2 && \
#	 echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini
#RUN docker-php-ext-enable xdebug

# Configuring system
ADD /DockerContainersConfig/config/php.ini /usr/local/etc/php/php.ini
ADD /DockerContainersConfig/config/custom-xdebug.ini /usr/local/etc/php/conf.d/custom-xdebug.ini
COPY /DockerContainersConfig/users/* /var/www/
RUN chmod +x /usr/local/bin/*

# Permissions / Shell par défaut / Activation de modules apache
RUN chmod 777 -Rf /var/www /var/www/.* \
	&& chown -Rf www-data:www-data /var/www /var/www/.* \
	&& usermod -u 1000 www-data \
	&& chsh -s /bin/zsh www-data\
	&& a2enmod rewrite \
	&& a2enmod headers

VOLUME /var/www/html
WORKDIR /var/www/html
