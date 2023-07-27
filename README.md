# EtronicWebsite
Simple backend added for this website. there is have login/routing/ MVC and CRUD

## Installation
git clone https://github.com/KasunDissanayaka/EtronicWebsite.git
cd EtronicWebsite
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
