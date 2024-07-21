run-app-with-setup:
	docker compose build
	docker compose up -d
	docker exec php /bin/sh -c "composer install && npm install && chmod -R 777 storage && php artisan key:generate"

run-app-with-setup-db:
	docker compose build
	docker compose up -d
	docker exec php /bin/sh -c "composer install && npm install && chmod -R 777 storage && php artisan key:generate && php artisan migrate:fresh --seed"

run-app:
	docker compose up -d

kill-app:
	docker compose down
