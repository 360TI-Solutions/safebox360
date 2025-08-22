#!/bin/bash

set -e

if [ ! -d /var/www/.tmp ]; then
	mkdir /var/www/.tmp
fi

if [ ! -f /var/www/.tmp/installed ]; then
  echo ">> Rodando instalação inicial..."

  # Crie pastas necessárias
  mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs storage/tmp
  chown -R administrator:administrator /var/www
  chown root:root /var/www/bin/dmi
  chmod a+s /var/www/bin/dmi

  # Exemplo: instalar dependências PHP
  composer install --no-interaction --prefer-dist
  chown -R administrator:administrator /var/www/vendor

  # Permissões (ajuste conforme seu ambiente)
  #chown -R www-data:www-data storage bootstrap/cache
  #chmod -R 775 storage bootstrap/cache
  #chown -R www-data:www-data storage

  # Qualquer outro setup inicial que você quiser
  su - administrator -c "php /var/www/artisan key:generate"
  su - administrator -c "php /var/www/artisan migrate --force || true"

  # Cria o marcador
  touch /var/www/.installed

  echo ">> Instalação completa."
fi

composer update
mkdir -p /var/run
touch /var/www/storage/logs/laravel.log
chown administrator:administrator /var/www/storage/logs/laravel.log
exec /usr/bin/supervisord -n -c /etc/supervisor/supervisord.conf
chown root:root /var/www/bin/dmi
chmod a+s /var/www/bin/dmi

# Continua com o processo padrão (ex: php-fpm)
#exec "$@"

