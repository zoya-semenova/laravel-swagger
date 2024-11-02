FROM openswoole/swoole:php8.3 AS base
WORKDIR /app
RUN apt update && \
    apt install -y curl git
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN install-php-extensions \
    mbstring  \
    xsl       \
    dom       \
    exif      \
    intl      \
    pcntl     \
    bcmath    \
    opcache   \
    zip       \
    gd        \
    pdo       \
    pdo_pgsql \
    sockets
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY . .
RUN chmod 775 /app/.docker/php/dev-entrypoint.sh

FROM base AS dev
ENV NODE_VERSION=20.11.0
ARG NVM_VERSION=v0.39.7
ENV NVM_DIR=/root/.nvm
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/{$NVM_VERSION}/install.sh | bash \
    && . $NVM_DIR/nvm.sh \
    && nvm install $NODE_VERSION \
    && nvm alias default $NODE_VERSION \
    && nvm use default
ENV NODE_PATH "${NVM_DIR}/v${NODE_VERSION}/lib/node_modules"
ENV PATH      "${NVM_DIR}/versions/node/v${NODE_VERSION}/bin/:${PATH}"
CMD ["bash", "/app/.docker/php/dev-entrypoint.sh"]

FROM base AS prod
RUN composer install --no-dev
RUN rm /usr/bin/install-php-extensions && rm /usr/local/bin/composer
CMD ["bash", "-c", "php artisan octane:start --host 0.0.0.0 --port 8000"]
