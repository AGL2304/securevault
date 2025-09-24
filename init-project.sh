#!/bin/bash

# Script d'initialisation du projet SecureVault
# Usage: ./init-project.sh

set -e

echo "🚀 Initialisation du projet SecureVault..."

# Vérification que nous sommes dans le bon répertoire
if [ ! -f "docker-compose.yml" ]; then
    echo "❌ Erreur: docker-compose.yml non trouvé. Assurez-vous d'être dans le répertoire du projet."
    exit 1
fi

# 1. Création du projet Laravel si composer.json n'existe pas
if [ ! -f "composer.json" ]; then
    echo "📦 Création du projet Laravel..."
    
    # Vérification si le répertoire contient des fichiers Laravel
    if [ -d "app" ] || [ -d "config" ] || [ -d "database" ]; then
        echo "⚠️  Le répertoire semble déjà contenir des fichiers Laravel"
        echo "Tentative d'installation des dépendances..."
        docker run --rm -v $(pwd):/app composer install --ignore-platform-reqs
    else
        # Sauvegarde des fichiers Docker existants
        if [ -d "docker" ]; then
            mv docker docker_backup
            echo "📁 Sauvegarde des fichiers Docker effectuée"
        fi
        
        # Sauvegarde des autres fichiers
        mkdir -p temp_backup
        [ -f "docker-compose.yml" ] && mv docker-compose.yml temp_backup/
        [ -f "Dockerfile" ] && mv Dockerfile temp_backup/
        [ -f "Makefile" ] && mv Makefile temp_backup/
        [ -f ".env.example" ] && mv .env.example temp_backup/
        
        # Création du projet Laravel dans un répertoire temporaire
        docker run --rm -v $(pwd):/app composer create-project laravel/laravel temp_laravel --prefer-dist
        
        # Déplacement des fichiers Laravel
        mv temp_laravel/* .
        mv temp_laravel/.* . 2>/dev/null || true
        rmdir temp_laravel
        
        # Restauration des fichiers Docker
        if [ -d "docker_backup" ]; then
            mv docker_backup docker
            echo "📁 Restauration des fichiers Docker effectuée"
        fi
        
        # Restauration des autres fichiers
        if [ -d "temp_backup" ]; then
            mv temp_backup/* . 2>/dev/null || true
            rmdir temp_backup
        fi
    fi
    
    echo "✅ Projet Laravel créé avec succès"
else
    echo "📦 composer.json déjà présent, installation des dépendances..."
    docker run --rm -v $(pwd):/app composer install --ignore-platform-reqs
fi

# 2. Copie du fichier .env
if [ ! -f ".env" ]; then
    if [ -f ".env.example" ]; then
        cp .env.example .env
        echo "✅ Fichier .env créé à partir de .env.example"
    else
        echo "⚠️  Fichier .env.example non trouvé, création d'un .env basique..."
        cat > .env << EOF
APP_NAME=SecureVault
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=securevault
DB_USERNAME=securevault_user
DB_PASSWORD=secure_password_123

REDIS_HOST=redis
REDIS_PASSWORD=redis_password_123
REDIS_PORT=6379

CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="noreply@securevault.com"
MAIL_FROM_NAME="\${APP_NAME}"
EOF
    fi
fi

# 3. Création des répertoires Docker nécessaires
echo "📁 Création des répertoires Docker..."
mkdir -p docker/nginx/conf.d
mkdir -p docker/nginx/ssl
mkdir -p docker/php
mkdir -p docker/mysql

# 4. Copie de la configuration Nginx
cat > docker/nginx/conf.d/default.conf << 'EOF'
server {
    listen 80;
    server_name localhost securevault.local;
    root /var/www/html/public;
    index index.php index.html index.htm;

    # Headers de sécurité
    add_header X-Content-Type-Options nosniff;
    add_header X-Frame-Options DENY;
    add_header X-XSS-Protection "1; mode=block";
    add_header Referrer-Policy "strict-origin-when-cross-origin";
    add_header Permissions-Policy "geolocation=(), microphone=(), camera=()";
    
    # Content Security Policy (à adapter selon vos besoins)
    add_header Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; font-src 'self' data:; connect-src 'self'";

    # Masquer la version de Nginx
    server_tokens off;

    # Limitation du taux de requêtes pour éviter le brute force
    limit_req_zone $binary_remote_addr zone=login:10m rate=5r/m;
    
    # Gestion des erreurs
    error_page 404 /404.html;
    error_page 500 502 503 504 /50x.html;

    # Logs
    access_log /var/log/nginx/securevault_access.log;
    error_log /var/log/nginx/securevault_error.log;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    # Protection des routes d'authentification
    location ~ ^/(login|register|password) {
        limit_req zone=login burst=5 nodelay;
        try_files $uri $uri/ /index.php?$query_string;
    }

    # Configuration PHP-FPM
    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass app:9000;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param PATH_INFO $fastcgi_path_info;
        
        # Sécurité supplémentaire pour PHP
        fastcgi_hide_header X-Powered-By;
        fastcgi_buffer_size 128k;
        fastcgi_buffers 4 256k;
        fastcgi_busy_buffers_size 256k;
    }

    # Blocage des fichiers sensibles
    location ~ /\. {
        deny all;
        access_log off;
        log_not_found off;
    }

    location ~* \.(env|log|htaccess)$ {
        deny all;
        access_log off;
        log_not_found off;
    }

    # Optimisation des assets statiques
    location ~* \.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        access_log off;
    }

    # Protection contre les attaques par déni de service
    client_body_buffer_size 1K;
    client_header_buffer_size 1k;
    client_max_body_size 10M;
    large_client_header_buffers 2 1k;
    client_body_timeout 10;
    client_header_timeout 10;
    keepalive_timeout 5 5;
    send_timeout 10;
}
EOF

# 5. Configuration PHP personnalisée
cat > docker/php/local.ini << 'EOF'
memory_limit=256M
upload_max_filesize=64M
post_max_size=64M
max_execution_time=300
display_errors=Off
log_errors=On
error_log=/var/log/php_errors.log

; Sécurité
expose_php=Off
disable_functions=exec,passthru,shell_exec,system,proc_open,popen,curl_exec,curl_multi_exec,parse_ini_file,show_source
allow_url_fopen=Off
allow_url_include=Off

; Sessions sécurisées
session.cookie_httponly=1
session.cookie_secure=1
session.use_strict_mode=1
EOF

# 6. Script SQL d'initialisation
cat > docker/mysql/init.sql << 'EOF'
-- Création de la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS securevault CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Création de l'utilisateur
CREATE USER IF NOT EXISTS 'securevault_user'@'%' IDENTIFIED BY 'secure_password_123';
GRANT ALL PRIVILEGES ON securevault.* TO 'securevault_user'@'%';
FLUSH PRIVILEGES;

-- Configuration de sécurité MySQL
SET GLOBAL log_bin_trust_function_creators = 1;
EOF

echo "✅ Fichiers de configuration Docker créés"

# 7. Installation des dépendances additionnelles pour SecureVault
echo "📦 Ajout des dépendances spécifiques à SecureVault..."

# Mise à jour du composer.json pour ajouter les packages nécessaires
if command -v jq > /dev/null; then
    # Utilisation de jq si disponible
    jq '.require += {
        "laravel/sanctum": "^3.3",
        "pragmarx/google2fa-laravel": "^2.0",
        "spatie/laravel-activitylog": "^4.7",
        "spatie/laravel-permission": "^5.11",
        "paragonie/sodium_compat": "^1.20"
    }' composer.json > composer.tmp && mv composer.tmp composer.json
else
    echo "⚠️  jq non installé, ajout manuel des dépendances nécessaire dans composer.json"
fi

echo "🏗️  Construction des images Docker..."
docker-compose build

echo "🚀 Démarrage des services..."
docker-compose up -d

echo "⏳ Attente du démarrage des services (30 secondes)..."
sleep 30

echo "🔧 Configuration de Laravel..."
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan storage:link
docker-compose exec app php artisan config:cache

echo "🗄️  Exécution des migrations..."
docker-compose exec app php artisan migrate:install
docker-compose exec app php artisan migrate

echo "🌱 Seeding des données de test..."
docker-compose exec app php artisan db:seed --class=DatabaseSeeder

echo ""
echo "🎉 SecureVault est maintenant prêt !"
echo "📱 Application: http://localhost"
echo "📧 MailHog: http://localhost:8025"
echo "🗄️  PhpMyAdmin: http://localhost:8080"
echo ""
echo "📋 Commandes utiles:"
echo "  make logs    - Voir les logs"
echo "  make shell   - Accéder au shell Laravel"
echo "  make test    - Exécuter les tests"
echo "  make down    - Arrêter les services"
echo ""
EOF