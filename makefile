up:
	docker compose up -d 

down:
	docker compose down

cert:
	certbot certonly -d rhythmology.study -d waio.dev

restart: down up
