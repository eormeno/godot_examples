sudo docker compose -f docker-compose-prod.yml up -d --build app
sudo docker compose run --rm composer update
sudo docker compose run --rm artisan migrate
sudo docker compose run --rm artisan db:seed
sudo docker compose run --rm artisan key:generate
sudo docker compose run --rm artisan users
