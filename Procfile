release: php artisan config:clear && php artisan cache:clear && php artisan migrate:fresh --force && php artisan db:seed --force
web: vendor/bin/heroku-php-apache2 public/
