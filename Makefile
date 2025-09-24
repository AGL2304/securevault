.PHONY: help build up down restart logs shell composer artisan migrate fresh seed test

# Aide
help:
	@echo "SecureVault - Commandes Docker disponibles:"
	@echo ""
	@echo "  build      - Construire les images Docker"
	@echo "  up         - Démarrer tous les services"
	@echo "  down       - Arrêter tous les services"
	@echo "  restart    - Redémarrer tous les services"
	@echo "  logs       - Afficher les logs"
	@echo "  shell      - Accéder au shell du container Laravel"
	@echo "  composer   - Installer les dépendances Composer"
	@echo "  artisan    - Exécuter des commandes Artisan"
	@echo "  migrate    - Exécuter les migrations"
	@echo "  fresh      - Migration fresh avec seeding"
	@echo "  seed       - Exécuter les seeders"
	@echo "  test       - Exécuter les tests PHPUnit"
	@echo "  setup      - Installation complète du projet"
	@echo "  security   - Vérification de sécurité"
	@echo ""

# Construction des images
build:
	docker-compose build --no-cache

# Démarrage des services
up:
	docker-compose up -d

# Arrêt des services
down:
	docker-compose down

# Redémarrage
restart:
	docker-compose restart

# Logs
logs:
	docker-compose logs -f

# Shell du container Laravel
shell:
	docker-compose exec app sh

# Installation des dépendances Composer
composer:
	docker-compose exec app composer install

# Commandes Artisan
artisan:
	docker-compose exec app php artisan $(filter-out $@,$(MAKECMDGOALS))

# Migrations
migrate:
	docker-compose exec app php artisan migrate

# Migration fresh avec seeding
fresh:
	docker-compose exec app php artisan migrate:fresh --seed

# Seeders
seed:
	docker-compose exec app php artisan db:seed

# Tests PHPUnit
test:
	docker-compose exec app php artisan test

# Configuration initiale complète
setup: build up composer
	@echo "⏳ Attente du démarrage des services..."
	@sleep 10
	docker-compose exec app cp .env.example .env
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan storage:link
	docker-compose exec app php artisan config:cache
	docker-compose exec app php artisan migrate:fresh --seed
	@echo "✅ SecureVault est maintenant configuré !"
	@echo "🌐 Application: http://localhost"
	@echo "📧 MailHog: http://localhost:8025"
	@echo "🗄️  PhpMyAdmin: http://localhost:8080"

# Vérifications de sécurité
security:
	@echo "🔍 Vérification de la sécurité..."
	docker-compose exec app php artisan config:show | grep -i encrypt
	docker-compose exec app php artisan route:list | grep -E "(login|register|password)"
	@echo "✅ Vérifications terminées"

# Installation des assets frontend
npm-install:
	docker-compose run --rm node npm install

# Compilation des assets
npm-dev:
	docker-compose run --rm node npm run dev

# Compilation pour la production
npm-prod:
	docker-compose run --rm node npm run prod

# Surveillance des changements
npm-watch:
	docker-compose run --rm node npm run watch

# Nettoyage complet
clean:
	docker-compose down -v
	docker system prune -f
	docker volume prune -f

# Backup de la base de données
backup:
	docker-compose exec mysql mysqldump -u root -proot_password_123 securevault > backup_$(shell date +%Y%m%d_%H%M%S).sql

# Restauration de la base de données
restore:
	@read -p "Nom du fichier de backup: " backup_file; \
	docker-compose exec -T mysql mysql -u root -proot_password_123 securevault < $$backup_file

%:
	@: