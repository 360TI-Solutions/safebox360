#!/bin/bash

# UID e GID real (mesmo se executado com sudo)
REAL_UID=$(id -u "${SUDO_USER:-$USER}")
REAL_GID=$(id -g "${SUDO_USER:-$USER}")

echo "Usando UID=$REAL_UID e GID=$REAL_GID para o usuário 'administrator' no container."

# Exportar variáveis para docker-compose
#export APP_UID=$REAL_UID
#export APP_GID=$REAL_GID
export APP_UID=1000
export APP_GID=1000

# gerar uma nova senha para o postgres
nova=$(head /dev/urandom | tr -dc A-Za-z0-9 | head -c 16)

# Gerar ou sobrescrever o .env com essas variáveis
cp -f .env.default .env
cat >> .env <<EOF
APP_UID=$APP_UID
APP_GID=$APP_GID
EOF

cp -f composer.json.default composer.json
cp -f docker-compose.yml.default docker-compose.yml 

sed -i "s/DB_PASSWORD=safebox360/DB_PASSWORD=${nova}/g" .env
sed -i "s/POSTGRES_PASSWORD: \"safebox360\"/POSTGRES_PASSWORD: \"${nova}\"/g" docker-compose.yml

# Subir os containers
docker compose up -d --build

