docker-up:
	COMPOSE_PROJECT_NAME=test-hospital
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-build:
	COMPOSE_PROJECT_NAME=test-hospital
	docker-compose up --build -d

perm:
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache
	sudo chmod -R 777 storage

assets-install:
	docker-compose exec node yarn install

assets-dev:
	docker-compose exec node yarn run dev

assets-rebuild:
	docker-compose exec node npm rebuild node-sass --force

assets-watch:
	docker-compose exec node yarn run watch

test:
	docker-compose exec php-cli vendor/bin/phpunit



