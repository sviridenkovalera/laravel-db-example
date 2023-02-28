composer_update:
	docker run --rm -it -v "${PWD}:/app" composer/composer update

run:
	docker-compose up -d

stop:
	docker-compose down